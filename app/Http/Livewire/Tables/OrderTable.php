<?php

namespace App\Http\Livewire\Tables;

use App\Exports\OrdersExport;
use App\Models\PaymentMethod;
use App\Models\Order;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

use Illuminate\Support\Facades\Auth;

class OrderTable extends BaseDataTableComponent
{


    public $header_view = 'components.buttons.new';
    public $per_page = 10;

    public $dataListQuery;
    public array $bulkActions = [];

    public function mount()
    {
        $this->bulkActions = [
            'exportSelected' => __('Export'),
        ];
    }


    public function filters(): array
    {
        $filterPaymentMethods = [
            '' => __('Any'),
        ];
        $paymentMethods = PaymentMethod::get();
        foreach ($paymentMethods as $paymentMethod) {
            $filterPaymentMethods[$paymentMethod->id] = $paymentMethod->name;
        }
        return [
            'payment_method_id' => Filter::make(__("Payment Method"))
                ->select($filterPaymentMethods),
            'status' => Filter::make(__("Status"))
                ->select([
                    '' => __('Any'),
                    'scheduled' => __('Scheduled'),
                    'pending' => __('Pending'),
                    'preparing' => __('Preparing'),
                    'ready' => __('Ready'),
                    'enroute' => __('Enroute'),
                    'delivered' => __('Delivered'),
                    'cancelled' => __('Cancelled'),
                    'failed' => __('Failed'),
                ]),
            'payment_status' => Filter::make(__("Payment Status"))
                ->select([
                    '' => __('Any'),
                    'pending' => __('Pending'),
                    'review' => __('Review'),
                    'successful' => __('Successful'),
                    'failed' => __('Failed'),
                ]),
            'start_date' => Filter::make(__('Start Date'))
                ->date([
                    'min' => now()->subYear()->format('Y-m-d'), // Optional
                    'max' => now()->format('Y-m-d') // Optional
                ]),
            'end_date' => Filter::make(__('End Date'))
                ->date([
                    'min' => now()->subYear()->format('Y-m-d'), // Optional
                    'max' => now()->format('Y-m-d') // Optional
                ])
        ];
    }



    public function query()
    {

        $user = User::find(Auth::id());


        if ($user->hasRole('admin')) {
            $query = Order::setEagerLoads([]);
        } else if ($user->hasRole('city-admin')) {
            $query = Order::setEagerLoads([])->with('vendor')->whereHas("vendor", function ($query) {
                return $query->where('creator_id', Auth::id());
            });
        } else if ($user->hasRole('fleet-manager')) {
            $query = Order::with('vendor')->whereHas("driver", function ($query) {
                return $query->whereHas("fleets", function ($query) {
                    return $query->where('id', \Auth::user()->fleet()->id ?? null);
                });
            });
        } else {
            $query = Order::setEagerLoads([])->where('vendor_id', Auth::user()->vendor_id);
        }

        return $query->when($this->getFilter('payment_method_id'), fn ($query, $paymentMethodId) => $query->where('payment_method_id', $paymentMethodId))
            ->when($this->getFilter('status'), fn ($query, $status) => $query->currentStatus($status))
            ->when($this->getFilter('payment_status'), fn ($query, $pStatus) => $query->where('payment_status', $pStatus))
            ->when($this->getFilter('start_date'), fn ($query, $sDate) => $query->whereDate('created_at', ">=", $sDate))
            ->when($this->getFilter('end_date'), fn ($query, $eDate) => $query->whereDate('created_at', "<=", $eDate));
    }

    public function columns(): array
    {

        $columns = [
            Column::make(__('ID'), 'id')->searchable()->sortable(),
            Column::make(__('Type'), 'code_order_type'),
            Column::make(__('Code'), 'code')
                ->format(function ($value, $column, $row) {

                    $text = __(\Str::ucfirst($row->code));
                    if ($row->driver_id) {
                        $text .= "<br/>";
                        $text .= "<span class='text-xs font-bold text-primary-400'>Driver Assigned</span>";
                    }


                    return view('components.table.plain', $data = [
                        "text" => $text
                    ]);
                })->searchable()->sortable(),
            Column::make(__('User'), 'user.name')
                ->format(function ($value, $column, $row) {
                    return view('components.table.user', $data = [
                        "value" => $value,
                        "model" => $row->user,
                    ]);
                })->searchable(),
            Column::make(__('Status'), 'status')
                ->format(function ($value, $column, $row) {

                    $text = __(\Str::ucfirst($row->status));
                    return view('components.table.plain', $data = [
                        "text" => $text
                    ]);
                }),
            Column::make(__('Total'), 'total')->format(function ($value, $column, $row) {

                $text = "<p>" . currencyFormat($row->total, $row->currency_symbol) . "</p>";
                $text .= "<span class='text-xs' style='color:$row->payment_status_color;'>" . __(\Str::ucfirst($row->payment_status)) . "</span>";
                return view('components.table.plain', $data = [
                    "text" => $text
                ]);

                // return view('components.table.order-total', $data = [
                //     "model" => $row
                // ]);
            })->searchable()
                ->sortable(),
            Column::make(__('Method'), 'payment_method.name')->searchable(),
        ];

        array_push($columns, Column::make(__('Created At'))->format(function ($value, $column, $row) {
            return view('components.table.formatted_date_time', $data = [
                "model" => $row
            ]);
        }));

        array_push($columns, Column::make(__('Actions'))->format(function ($value, $column, $row) {
            return view('components.buttons.order_actions', $data = [
                "model" => $row
            ]);
        }));
        return $columns;
    }


    public function exportSelected()
    {
        if ($this->selectedRowsQuery->count() > 0) {
            return Excel::download(new OrdersExport($this->selectedKeys), 'orders.xlsx');
        } else {
            //
        }
    }
}
