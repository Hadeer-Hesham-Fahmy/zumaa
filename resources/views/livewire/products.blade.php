@section('title', __('Products'))
<div>

    <x-baseview title="{{ __('Products') }}" :showNew="true">
        <livewire:tables.product-table />
    </x-baseview>

    {{-- new form --}}
    <div x-data="{ open: @entangle('showCreate') }">
        <x-modal-lg confirmText="{{ __('Save') }}" action="save" :clickAway="false">
            <p class="text-xl font-semibold">{{ __('Create Product') }}</p>
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    <x-input title="{{ __('Name') }}" name="name" />
                </div>
                <x-input title="{{ __('In Order Number') }}" name="in_order" />
            </div>
            <div class="grid grid-cols-2 gap-4">
                <x-input title="{{ __('SKU') }}" name="sku" />
                <x-input title="{{ __('Barcode') }}" name="barcode" />
            </div>

            <x-input.filepond wire:model="photos" title="{{ __('Photo(s)') }}"
                acceptedFileTypes="['image/png', 'image/jpeg', 'image/jpg']" allowImagePreview="true"
                imagePreviewMaxHeight="80" grid="3" multiple="true" allowFileSizeValidation="true"
                maxFileSize="{{ setting('filelimit.product_image_size', 200) }}kb" />

            <x-input-error message="{{ $errors->first('photos') }}" />

            <x-textarea h="h-56" title="{{ __('Description') }}" name="description" />

            <div class="grid grid-cols-2 gap-4">
                <x-input title="{{ __('Price') }}" name="price" />
                <x-input title="{{ __('Discount Price') }}" name="discount_price" />
            </div>


            <div class="grid grid-cols-2 gap-4">
                <x-input title="{{ __('Capacity') }}" name="capacity" placeholder="e.g 15" />
                <x-input title="{{ __('Unit') }}" name="unit"
                    placeholder="{{ __('Enter the unit of product. Default is kilogram(kg). e.g Kg, g, m, L') }}" />
            </div>

            <div class="grid grid-cols-2 gap-4">
                <x-input title="{{ __('Package Count') }}" name="package_count"
                    placeholder="{{ __('Number of item per package (ex: 6, 10)') }}" />
                <x-input title="{{ __('Available Qty') }}" name="available_qty"
                    placeholder="{{ __('Number of item available qty') }}" />
            </div>

            {{-- vendor --}}
            <livewire:component.autocomplete-input title="{{ __('Vendor') }}" column="name" model="Vendor"
                emitFunction="autocompleteVendorSelected" initialEmit="preselectedVendorEmit"
                disable="{{ auth()->user()->hasRole('manager') ?? 'false' }}" />


            {{-- categories --}}
            <livewire:component.autocomplete-input title="{{ __('Categories') }}" column="name" model="Category"
                emitFunction="autocompleteCategorySelected" updateQueryClauseName="categoryQueryClasueUpdate"
                :clear="true" :queryClause="$categorySearchClause ?? ''" onclearCalled="clearAutocompleteFieldsEvent" />

            {{-- selected categories --}}
            <x-item-chips :items="$selectedCategories ?? []" onRemove="removeSelectedCategory" />

            {{-- </div> --}}

            <div class="grid items-center grid-cols-2 gap-4">
                <x-checkbox title="{{ __('Plus Option') }}" name="plus_option"
                    description="{{ __('Option price should be added to product price') }}" :defer="false" />
                <x-checkbox title="{{ __('Can be Delivered') }}" name="deliverable"
                    description="{{ __('If product can be delivered to customers') }}" :defer="false" />
            </div>

            <div class="p-2 my-4 border rounded">
                <x-checkbox title="{{ __('Digital') }}" name="digital"
                    description="{{ __('If product is digital and can be downloaded') }}" :defer="false" />
                @if ($digital)
                    <x-input.filepond wire:model="digitalFile" allowImagePreview="false" allowFileSizeValidation="true"
                        maxFileSize="{{ setting('filelimit.max_product_digital_files_size', 2) }}mb" />
                @endif
            </div>


            <x-checkbox title="{{ __('Active') }}" name="isActive" :defer="false" />
        </x-modal-lg>
    </div>

    {{-- update form --}}
    <div x-data="{ open: @entangle('showEdit') }">
        <x-modal-lg confirmText="{{ __('Update') }}" action="update">
            <p class="text-xl font-semibold">{{ __('Update Product') }}</p>
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    <x-input title="{{ __('Name') }}" name="name" />
                </div>
                <x-input title="{{ __('In Order Number') }}" name="in_order" />
            </div>
            <div class="grid grid-cols-2 gap-4">
                <x-input title="{{ __('SKU') }}" name="sku" />
                <x-input title="{{ __('Barcode') }}" name="barcode" />
            </div>

            <x-input.filepond wire:model="photos" title="{{ __('Photo(s)') }}" id="editProductInput"
                allowAddFileEvent="true" acceptedFileTypes="['image/png', 'image/jpeg', 'image/jpg']" allowImagePreview
                multiple="true" allowFileSizeValidation imagePreviewMaxHeight="80"
                maxFileSize="{{ setting('filelimit.product_image_size', 200) }}kb" />

            <x-textarea h="h-56" title="{{ __('Description') }}" name="description"
                id="editProductDescription" />

            <div class="grid grid-cols-2 gap-4">
                <x-input title="{{ __('Price') }}" name="price" />
                <x-input title="{{ __('Discount Price') }}" name="discount_price" />
            </div>


            <div class="grid grid-cols-2 gap-4">
                <x-input title="{{ __('Capacity') }}" name="capacity" placeholder="e.g 15" />
                <x-input title="{{ __('Unit') }}" name="unit"
                    placeholder="{{ __('Enter the unit of product. Default is kilogram(kg). e.g Kg, g, m, L') }}" />
            </div>

            <div class="grid grid-cols-2 gap-4">
                <x-input title="{{ __('Package Count') }}" name="package_count"
                    placeholder="{{ __('Number of item per package (ex: 6, 10)') }}" />
                <x-input title="{{ __('Available Qty') }}" name="available_qty"
                    placeholder="{{ __('Number of item available qty') }}" />
            </div>

            {{-- vendor --}}
            <livewire:component.autocomplete-input title="{{ __('Vendor') }}" column="name" model="Vendor"
                emitFunction="autocompleteVendorSelected" initialEmit="preselectedVendorEmit"
                disable="{{ auth()->user()->hasRole('manager') ?? 'false' }}" />

            {{-- categories --}}
            <livewire:component.autocomplete-input title="{{ __('Categories') }}" column="name" model="Category"
                emitFunction="autocompleteCategorySelected" updateQueryClauseName="categoryQueryClasueUpdate"
                :clear="true" :queryClause="$categorySearchClause ?? ''" onclearCalled="clearAutocompleteFieldsEvent" />

            {{-- selected categories --}}
            <x-item-chips :items="$selectedCategories ?? []" onRemove="removeSelectedCategory" />

            <div class="grid items-center grid-cols-2 gap-4">
                <x-checkbox title="{{ __('Plus Option') }}" name="plus_option"
                    description="{{ __('Option price should be added to product price') }}" :defer="false" />
                <x-checkbox title="{{ __('Can be Delivered') }}" name="deliverable"
                    description="{{ __('If product can be delivered to customers') }}" :defer="false" />

            </div>
            <div class="p-2 border rounded-sm">
                <x-checkbox title="{{ __('Digital') }}" name="digital"
                    description="{{ __('If product is digital and can be downloaded') }}" :defer="false" />
                @if ($digital)
                    <x-input.filepond wire:model="digitalFile" allowImagePreview="false"
                        allowFileSizeValidation="true"
                        maxFileSize="{{ setting('filelimit.max_product_digital_files_size', 2) }}mb" />
                @endif
            </div>

            <x-checkbox title="{{ __('Active') }}" name="isActive" :defer="false" />

        </x-modal-lg>
    </div>

    {{-- Assign Subcategories --}}
    <div x-data="{ open: @entangle('showAssignSubcategories') }">
        <x-modal confirmText="{{ __('Add') }}" action="assignSubcategories">
            <p class="text-xl font-semibold">{{ __('Assign To Sub-categories') }}</p>
            <p class="text-sm text-gray-500">
                {{ __('Note: Only sub-categories of the assigned product categories will be listed here') }}</>
            <div class="grid grid-cols-1 lg:grid-cols-2">
                @foreach ($subCategories as $subCategory)
                    <x-checkbox title="{{ $subCategory->name }}({{ $subCategory->category->name }})"
                        name="subCategoriesIDs" value="{{ $subCategory->id }}" :defer="false" />
                @endforeach
            </div>

        </x-modal>
    </div>

    {{-- Assign menus --}}
    <div x-data="{ open: @entangle('showAssign') }">
        <x-modal confirmText="{{ __('Add') }}" action="assignMenus">
            <p class="text-xl font-semibold">{{ __('Add to Menus') }}</p>
            <p class="text-sm text-gray-500">
                {{ __('Note: Menus of selected vendor for product will be listed here') }}</>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($menus as $menu)
                    <x-checkbox title="{{ $menu->name }}" name="menusIDs" value="{{ $menu->id }}"
                        :defer="true" />
                @endforeach
            </div>

        </x-modal>
    </div>

    {{-- details modal --}}
    <div x-data="{ open: @entangle('showDetails') }">
        <x-modal-lg>

            <p class="text-xl font-semibold">{{ $selectedModel->name ?? '' }} {{ __('Details') }}</p>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <x-details.item title="{{ __('Name') }}" text="{{ $selectedModel->name ?? '' }}" />
                <x-details.item title="{{ __('SKU') }}" text="{{ $selectedModel->sku ?? '' }}" />
            </div>
            <x-details.item title="{{ __('Description') }}" text="">
                {!! $selectedModel->description ?? '' !!}
            </x-details.item>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <x-details.item title="{{ __('Price') }}"
                    text="{{ currencyFormat($selectedModel->price ?? '') }}" />
                <x-details.item title="{{ __('Discount Price') }}"
                    text="{{ currencyFormat($selectedModel->discount_price ?? '') }}" />


                {{-- <x-details.item title="" text="" /> --}}
                <x-details.item title="{{ __('Capacity') }}" text="{{ $selectedModel->capacity ?? '' }}" />
                <x-details.item title="{{ __('Unit') }}" text="{{ $selectedModel->unit ?? '' }}" />


                <x-details.item title="{{ __('Package Count') }}"
                    text="{{ $selectedModel->package_count ?? '0' }}" />
                <x-details.item title="{{ __('Available Qty') }}"
                    text="{{ $selectedModel->available_qty ?? '' }}" />


                <x-details.item title="{{ __('Vendor') }}" text="{{ $selectedModel->vendor->name ?? '' }}" />
                <x-details.item title="{{ __('Menus') }}" text="">
                    @if ($selectedModel != null)
                        {{ implode(', ',$selectedModel->menus()->pluck('name')->toArray()) }}
                    @endif
                </x-details.item>



            </div>
            <x-details.item title="{{ __('Photos') }}" text="">
                <div class="flex flex-wrap space-x-3 space-y-3">
                    @foreach ($selectedModel->photos ?? [] as $photo)
                        <a href="{{ $photo }}" target="_blank"><img src="{{ $photo }}"
                                class="w-24 h-24 mx-2 rounded-sm" /></a>
                    @endforeach
                </div>
            </x-details.item>
            @if ($selectedModel->digital ?? false)
                <x-details.item title="{{ __('File') }}" text="">
                    <div class="space-y-3">
                        @foreach ($selectedModel->digital_files ?? [] as $file)
                            <div class="flex items-center p-2 border rounded">
                                <div class="w-full text-wrap">
                                    <p>{{ $file->name }}</p>
                                    <p>
                                        <span class="text-xs font-thin text-primary-400">
                                            {{ $file->size }} bytes
                                        </span>
                                    </p>
                                </div>

                                <a href="{{ $file->link }}" target="_blank"
                                    class="font-medium hover:underline text-primary-500 hover:text-primary-800 hover:font-bold">
                                    {{ __('Download') }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </x-details.item>
            @endif
            <div class="grid grid-cols-1 gap-4 pt-4 mt-4 border-t md:grid-cols-2 lg:grid-cols-3">

                <div>
                    <x-label title="{{ __('Status') }}" />
                    <x-table.active :model="$selectedModel" />
                </div>

                <div>
                    <x-label title="{{ __('Plus Option') }}" />
                    <x-table.bool isTrue="{{ $selectedModel->plus_option ?? false }}" />
                </div>

                <div>
                    <x-label title="{{ __('Available for Delivery') }}" />
                    <x-table.bool isTrue="{{ $selectedModel->deliverable ?? false }}" />
                </div>

            </div>

            <div class="grid grid-cols-1 gap-4 pt-4 mt-4 border-t md:grid-cols-2 lg:grid-cols-3">





            </div>

        </x-modal-lg>
    </div>
</div>
