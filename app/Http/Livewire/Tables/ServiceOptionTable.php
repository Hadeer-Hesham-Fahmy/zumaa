<?php

namespace App\Http\Livewire\Tables;

use App\Models\ServiceOption;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Facades\Auth;

class ServiceOptionTable extends OrderingBaseDataTableComponent
{

    public $model = ServiceOption::class;

    public function query()
    {
        if (Auth::user()->hasRole('admin')) {
            return ServiceOption::with('option_group');
        } else {
            return ServiceOption::with('option_group')->where('vendor_id', Auth::user()->vendor_id);
        }
    }

    public function columns(): array
    {

        $columns = [
            Column::make(__('ID'), "id"),
            $this->imageColumn(),
            Column::make(__('Name'), 'name')->searchable()->sortable(),
            $this->priceColumn()->searchable()->sortable(),
            Column::make(__('Option Group'), 'option_group.name')->searchable()->sortable(),
            $this->activeColumn(),
            Column::make(__('Created At'), 'formatted_date'),
            $this->actionsColumn(),
        ];

        //
        // if( $this->canManage ){
        //     array_push($columns, Column::make('Actions')->view('components.buttons.actions'));
        // }
        return $columns;
    }
}
