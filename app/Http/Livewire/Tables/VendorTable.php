<?php

namespace App\Http\Livewire\Tables;

use App\Models\CountryVendor;
use App\Models\OrderProduct;
use App\Models\OrderService;
use App\Models\OrderStop;
use App\Models\Vendor;
use App\Models\Order;
use App\Models\PackageTypePricing;
use App\Models\Product;
use App\Models\Service;
use App\Models\User;
use App\Models\VendorType;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class VendorTable extends OrderingBaseDataTableComponent
{

    public $model = Vendor::class;
    public bool $columnSelect = false;
    public string $defaultSortColumn = 'is_active';
    public string $defaultSortDirection = 'desc';


    public function filters(): array
    {
        $vendorTypes = VendorType::all();
        $filtersArray = [
            "" => __('All')
        ];
        foreach ($vendorTypes as $vendorType) {
            $filtersArray[$vendorType->id] = $vendorType->name;
        }
        return [
            'vendor_type' => Filter::make(__("Type"))
                ->select($filtersArray),
        ];
    }


    public function query()
    {
        return Vendor::with('vendor_type')->mine()
            ->when($this->getFilter('vendor_type'), fn ($query, $value) => $query->where('vendor_type_id', $value));
    }

    public function setTableRowClass($row): ?string
    {
        return $row->is_active ? null : 'inactive-item';
    }

    public function columns(): array
    {
        return [
            Column::make(__('ID'), 'id')->sortable()->searchable(),
            //address
            Column::make(__('Name'), 'name')->format(function ($value, $column, $row) {
                $text = "<p class='font-semibold'>" . $row->name . "</p>";
                //if address is not empty
                if (!empty($row->address)) {
                    $text .= "<p class='text-xs font-light text-muted'>" . $row->address . "</p>";
                }
                return view('components.table.plain', $data = [
                    "text" => $text,
                ]);
            })->sortable()
                ->searchable(
                    function ($builder, $term) {
                        $builder->orWhere('name', 'like', '%' . $term . '%')
                            ->orWhere('address', 'like', '%' . $term . '%');
                    }
                ),
            Column::make(__('Type'), 'vendor_type.name'),
            Column::make(__('Created At'), 'formatted_date'),
            Column::make(__('Actions'))->format(function ($value, $column, $row) {
                return view('components.buttons.market_actions', $data = [
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
            //
            $orderIds = Order::whereIn('vendor_id', [$this->selectedModel->id])->get()->pluck('id');
            //
            if (!empty($orderIds)) {
                //order_products
                OrderProduct::whereIn('order_id', $orderIds)->delete();
                //order_services
                OrderService::whereIn('order_id', $orderIds)->delete();
                //order_stops
                OrderStop::whereIn('order_id', $orderIds)->delete();
                //delete orders placed with that vendor
                Order::whereIn('vendor_id', [$this->selectedModel->id])->delete();
            }

            //products/services/packache type pricing
            $vendorProductIds = Product::where('vendor_id', $this->selectedModel->id)->pluck("id")->toArray();
            //delete any row in tbale that has vendor_id column
            $this->deleteFromTables('product_id', $vendorProductIds, true);
            $vendorServiceIds = Service::where('vendor_id', $this->selectedModel->id)->pluck("id")->toArray();
            //delete any row in tbale that has vendor_id column
            $this->deleteFromTables('service_id', $vendorServiceIds, true);
            $vendorPackageTypePricingIds = PackageTypePricing::where('vendor_id', $this->selectedModel->id)->pluck("id")->toArray();
            //delete any row in tbale that has vendor_id column
            $this->deleteFromTables('package_type_pricing_id', $vendorPackageTypePricingIds, true);


            //
            CountryVendor::where('vendor_id', $this->selectedModel->id)->delete();

            //delete any row in tbale that has vendor_id column
            $this->deleteFromTables('vendor_id', $this->selectedModel->id, false, ['users']);
            //delete vendor payment accounts, the table has morphs column: accountable
            //write BD script to delete any row in tbale that has accountable_type column of value: App\Models\Vendor and accountable_id column of value: $this->selectedModel->id
            DB::table('payment_accounts')->where('accountable_type', 'App\Models\Vendor')->where('accountable_id', $this->selectedModel->id)->delete();

            $this->selectedModel = $this->selectedModel->fresh();
            $this->selectedModel->forceDelete();

            \DB::commit();
            $this->showSuccessAlert("Deleted");
        } catch (Exception $error) {
            \DB::rollback();
            $this->showErrorAlert($error->getMessage() ?? "Failed");
        }
    }


    //
    function deleteFromTables($column, $modelId, $isArray = false, $excludedTables = [])
    {
        $tables = \DB::select('SHOW TABLES');
        foreach ($tables as $table) {
            foreach ($table as $key => $value)
                if (!in_array($value, $excludedTables)) {
                    if (Schema::hasColumn($value, $column)) {
                        if ($isArray) {
                            \DB::table($value)->whereIn($column, $modelId)->delete();
                        } else {
                            \DB::table($value)->where($column, $modelId)->delete();
                        }
                    }
                }
        }
    }



    function goOffline($id)
    {
        $this->isDemo();
        $vendor = Vendor::find($id);
        $vendor->is_open = 0;
        $vendor->save();
        $this->showSuccessAlert(__("Vendor is now offline"));
    }

    function goOnline($id)
    {
        $this->isDemo();
        $vendor = Vendor::find($id);
        $vendor->is_open = 1;
        $vendor->save();
        $this->showSuccessAlert(__("Vendor is now online"));
    }
}
