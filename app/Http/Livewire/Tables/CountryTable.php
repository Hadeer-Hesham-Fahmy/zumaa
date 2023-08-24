<?php

namespace App\Http\Livewire\Tables;

use App\Models\Country;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CountryTable extends BaseDataTableComponent
{

    public $model = Country::class;
    public $per_page = 40;
    public $header_view = 'components.buttons.new';

    public function query()
    {
        return Country::query();
    }

    public function columns(): array
    {
        return [
            Column::make(__('ID'), "id"),
            Column::make(__('Name'), 'name')->searchable()->sortable(),
            $this->actionsColumn('components.buttons.edit'),
        ];
    }
}
