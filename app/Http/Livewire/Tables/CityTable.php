<?php

namespace App\Http\Livewire\Tables;

use App\Models\City;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CityTable extends BaseDataTableComponent
{

    public $model = City::class;
    public $per_page = 100;

    public function query()
    {
        return City::with('state.country');
    }

    public function columns(): array
    {
        return [
            Column::make(__('ID'), "id")->sortable(),
            Column::make(__('Name'), 'name')->searchable()->sortable(),
            Column::make(__('State'), "state.name")->searchable(),
            Column::make(__('Country'), "state.country.name")->searchable(),
            $this->actionsColumn('components.buttons.edit'),
        ];
    }
}
