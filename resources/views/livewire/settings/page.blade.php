<div wire:init="setupEditors">


    <x-form action="savePageSettings" :noClass="true">
        <div class="w-full md:w-8/12 lg:w-6/12">
            <div>
                <x-label title="{{ __('Driver Verification Document Instructions') }}" />
                <div id="driverDocumentInstructions"></div>
                <div class="hidden">
                    <input type="text" id="driverDocumentInstructionsTextArea"
                        wire:model.defer="driverDocumentInstructions" />
                </div>
            </div>
            <x-input title="{{ __('Max Driver Selectable Documents') }}" name="driverDocumentCount" type="number" />
            <hr class="my-12" />
            {{--  --}}
            <x-label title="{{ __('Vendor Verification Document Instructions') }}" />
            <div>
                <div id="vendorDocumentInstructions"></div>
                <div class="hidden">
                    <input type="text" id="vendorDocumentInstructionsTextArea"
                        wire:model.defer="vendorDocumentInstructions" />
                </div>
            </div>
            <x-input title="{{ __('Max Vendor Selectable Documents') }}" name="vendorDocumentCount" type="number" />
            <x-buttons.primary title="{{ __('Save Changes') }}" />
        </div>
    </x-form>


</div>
