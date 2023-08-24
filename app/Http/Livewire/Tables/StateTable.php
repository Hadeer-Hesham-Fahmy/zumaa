<?php

namespace App\Http\Livewire\Tables;

use App\Models\State;
use Rappasoft\LaravelLivewireTables\Views\Column;

class StateTable extends BaseDataTableComponent
{

    public $model = State::class;
    public $per_page = 20;
    public $header_view = 'components.buttons.new';

    public function query()
    {
        return State::with('country');
    }

    public function columns(): array
    {
        return [
            Column::make(__('ID'), "id")->sortable(),
            Column::make(__('Name'), 'name')->searchable()->sortable(),
            Column::make(__('Country'), "country.name")->searchable(),
            $this->actionsColumn('components.buttons.edit'),
        ];
    }
}
