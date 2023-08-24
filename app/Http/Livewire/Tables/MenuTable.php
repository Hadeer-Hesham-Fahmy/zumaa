<?php

namespace App\Http\Livewire\Tables;

use App\Models\Menu;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Facades\Auth;

class MenuTable extends OrderingBaseDataTableComponent
{

    public $model = Menu::class;

    
    public function showHeader(){
        if (!Auth::user()->hasRole('manager')) {
            $this->header_view = null;
            $this->canManage = false;
        }else{
            $this->header_view = 'components.buttons.new';
            $this->canManage = true;
        }
    }

    public function query()
    {

        if (Auth::user()->hasRole('manager')) {
            return Menu::where('vendor_id', Auth::user()->vendor_id );
        } else {
            return Menu::query();
        }
    }

    public function columns():array
    {

        $columns = [
            Column::make(__('ID'),"id")->searchable()->sortable(),
            Column::make(__('Name'),'name')->searchable()->sortable(),
            $this->activeColumn(),
            Column::make(__('Created At'), 'formatted_date'),
            $this->actionsColumn(),
        ];
        return $columns;
    }
}
