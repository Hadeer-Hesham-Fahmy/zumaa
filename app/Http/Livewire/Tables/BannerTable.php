<?php

namespace App\Http\Livewire\Tables;

use App\Models\Banner;
use Rappasoft\LaravelLivewireTables\Views\Column;

class BannerTable extends OrderingBaseDataTableComponent
{

    public $model = Banner::class;
    public $header_view = 'components.buttons.new';


    public function query()
    {
        return Banner::with('category','vendor');
    }

    public function columns(): array
    {
        return [
            Column::make(__('ID'),"id")->searchable()->sortable(),
            Column::make(__('Link'),'link')->addClass('break-all w-64 md:w-3/12')->searchable(),
            Column::make(__('Vendor'),'vendor.name')->searchable(),
            Column::make(__('Category'),'category.name')->searchable(),
            Column::make(__('Image'))->format(function ($value, $column, $row) {
                return view('components.table.image_md', $data = [
                    "model" => $row
                ]);
            }),
            Column::make(__('Active'))->format(function ($value, $column, $row) {
                return view('components.table.active', $data = [
                    "model" => $row
                ]);
            }),

            Column::make(__('Created At'), 'formatted_date'),
            Column::make(__('Actions'))->format(function ($value, $column, $row) {
                return view('components.buttons.actions', $data = [
                    "model" => $row
                ]);
            }),
        ];
    }
}
