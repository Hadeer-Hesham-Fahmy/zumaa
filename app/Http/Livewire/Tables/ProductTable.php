<?php

namespace App\Http\Livewire\Tables;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

class ProductTable extends OrderingBaseDataTableComponent
{

    public $model = Product::class;
    public bool $columnSelect = false;

    public function filters(): array
    {
        return [
            'digital' => Filter::make(__("Digital"))
                ->select([
                    '' => __('Any'),
                    '1' => __('Yes'),
                    '0' => __('No'),
                ]),
        ];
    }


    public function query()
    {

        $user = User::find(Auth::id());
        if ($user->hasRole('admin')) {
            $mQuery = Product::when($this->getFilter('digital'), fn ($query, $isDigital) => $query->whereDigital($isDigital));
        } elseif ($user->hasRole('city-admin')) {
            $mQuery = Product::with('vendor')->whereHas("vendor", function ($query) {
                return $query->where('creator_id', Auth::id());
            });
        } else {
            $mQuery = Product::where("vendor_id", Auth::user()->vendor_id);
        }

        return $mQuery->when($this->getFilter('digital'), fn ($query, $isDigital) => $query->whereDigital($isDigital));
    }
    public function columns(): array
    {
        return [
            Column::make(__('ID'), 'id')->addClass('w-48')->searchable()->sortable(),
            $this->smImageColumn(),
            Column::make(__('Name'), 'name')->addClass('break-all w-64 md:w-3/12')->searchable()->sortable(),
            Column::make(__('Price'), 'price')->format(function ($value, $column, $row) {
                return view('components.table.price', $data = [
                    "model" => $row
                ]);
            })->searchable()->sortable(),
            Column::make(__('Discount Price'), 'discount_price')->format(function ($value, $column, $row) {
                return view('components.table.discount_price', $data = [
                    "model" => $row
                ]);
            })->searchable()->sortable(),
            Column::make(__('Available Qty'), "available_qty")->sortable(),
            $this->activeColumn(),
            Column::make(__('Actions'))->addClass('flex items-center')->format(function ($value, $column, $row) {
                return view('components.buttons.product_actions', $data = [
                    "model" => $row
                ]);
            }),


        ];
    }


    //
    public function deleteModel()
    {

        try {
            $this->isDemo();
            \DB::beginTransaction();
            $this->selectedModel->delete();
            \DB::commit();
            $this->showSuccessAlert("Deleted");
        } catch (Exception $error) {
            \DB::rollback();
            $this->showErrorAlert($error->getMessage() ?? "Failed");
        }
    }
}
