<?php

namespace App\Http\Livewire;

use App\Models\Banner;
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class BannerLivewire extends BaseLivewireComponent
{

    //
    public $model = Banner::class;

    //
    public $link;
    public $vendor_id;
    public $category_id;
    public $isActive;
    public $featured;
    public $vendorSearchClause = [];


    public function render()
    {
        return view('livewire.banners', [
            "categories" => Category::active()->get(),
        ]);
    }


    //select actions
    public function autocompleteVendorSelected($vendor)
    {

        try {
            $this->vendor_id = $vendor['id'];
        } catch (\Exception $ex) {
            logger("Error", [$ex]);
        }
    }


    public function save()
    {
        //validate
        $this->validate(
            [
                "category_id" => "required_without_all:link,vendor_id|nullable|exists:categories,id",
                "link" => "required_without_all:category_id,vendor_id|nullable|url",
                "vendor_id" => "required_without_all:link,category_id|nullable|exists:vendors,id",
                "photo" => "required|image|max:".setting("filelimit.banner",2048)."",
            ],
        );

        try {

            DB::beginTransaction();
            $model = new Banner();
            $model->category_id = $this->category_id ?? null;
            $model->vendor_id = $this->vendor_id ?? null;
            $model->link = $this->link ?? '';
            $model->is_active = $this->isActive ?? false;
            $model->featured = $this->featured ?? false;
            $model->save();

            if ($this->photo) {

                $model->clearMediaCollection();
                $model->addMedia($this->photo->getRealPath())->toMediaCollection();
                $this->photo = null;
            }

            DB::commit();

            $this->dismissModal();
            $this->reset();
            $this->showSuccessAlert(__("Banner created successfully!"));
            $this->emit('refreshTable');
        } catch (Exception $error) {
            DB::rollback();
            $this->showErrorAlert($error->getMessage() ?? __("Banner creation failed!"));
        }
    }

    public function initiateEdit($id)
    {
        $this->selectedModel = $this->model::find($id);
        $this->category_id = $this->selectedModel->category_id;
        $this->vendor_id = $this->selectedModel->vendor_id;
        $this->link = $this->selectedModel->link;
        $this->isActive = $this->selectedModel->is_active;
        $this->featured = $this->selectedModel->featured;
        $this->emit('preselectedVendorEmit', $this->selectedModel->vendor->name ?? "");
        $this->emit('showEditModal');
    }

    public function update()
    {
        //validate
        $this->validate(
            [
                "category_id" => "required_without_all:link,vendor_id|nullable|exists:categories,id",
                "link" => "required_without_all:category_id,vendor_id|nullable|url",
                "vendor_id" => "required_without_all:link,category_id|nullable|exists:vendors,id",
                "photo" => "sometimes|nullable|image|max:".setting("filelimit.banner",2048)."",
            ]
        );

        try {

            DB::beginTransaction();
            $model = $this->selectedModel;
            $model->category_id = $this->category_id ?? null;
            $model->vendor_id = $this->vendor_id ?? null;
            $model->link = $this->link ?? '';
            $model->is_active = $this->isActive ?? false;
            $model->featured = $this->featured;
            $model->save();

            if ($this->photo) {

                $model->clearMediaCollection();
                $model->addMedia($this->photo->getRealPath())->toMediaCollection();
                $this->photo = null;
            }

            DB::commit();

            $this->dismissModal();
            $this->reset();
            $this->showSuccessAlert(__("Banner updated successfully!"));
            $this->emit('refreshTable');
        } catch (Exception $error) {
            DB::rollback();
            $this->showErrorAlert($error->getMessage() ?? __("Banner updated failed!"));
        }
    }
}
