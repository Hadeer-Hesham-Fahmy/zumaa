<div class=" w-full md:w-10/12 lg:w-6/12">
    <x-form noClass="true" action="saveMiscSettings">
        <x-details.item title="{{ __('Vendor') }}">
            <div class='grid grid-cols-1 gap-4 md:grid-cols-2'>
                <x-checkbox title="{{ __('Enable') }}" description="{{ __('Show vendor phone details to customer') }}"
                    name="showVendorPhone" :defer="true" />
            </div>
        </x-details.item>
        <hr class="my-4" />
        <x-details.item title="{{ __('Chat') }}">
            <p class="mt-4 text-sm font-semibold">{{ __('Vendor Chat') }}</p>
            <div class='grid grid-cols-1 gap-4 md:grid-cols-2'>
                <x-checkbox title="{{ __('Enable') }}"
                    description="{{ __('Allow chat between vendor and customer/driver') }}" name="canVendorChat"
                    :defer="true" />
                <x-checkbox title="{{ __('Enable') }}"
                    description="{{ __('Allow image sharing in chat between vendor and customer/driver') }}"
                    name="canVendorChatSupportMedia" :defer="true" />

            </div>
            <p class="mt-4 text-sm font-semibold">{{ __('Customer Chat') }}</p>
            <div class='grid grid-cols-1 gap-4 md:grid-cols-2'>
                <x-checkbox title="{{ __('Enable') }}"
                    description="{{ __('Allow chat between customer and vendor/driver') }}" name="canCustomerChat"
                    :defer="true" />
                <x-checkbox title="{{ __('Enable') }}"
                    description="{{ __('Allow image sharing in chat between customer and vendor/driver') }}"
                    name="canCustomerChatSupportMedia" :defer="true" />
            </div>
            <p class="mt-4 text-sm font-semibold">{{ __('Driver Chat') }}</p>
            <div class='grid grid-cols-1 gap-4 md:grid-cols-2'>
                <x-checkbox title="{{ __('Enable') }}"
                    description="{{ __('Allow chat between driver and customer/vendor') }}" name="canDriverChat"
                    :defer="true" />
                <x-checkbox title="{{ __('Enable') }}"
                    description="{{ __('Allow image sharing in chat between driver and customer/vendor') }}"
                    name="canDriverChatSupportMedia" :defer="true" />
            </div>
            <x-buttons.primary title="{{ __('Save') }}" />
        </x-details.item>
    </x-form>
</div>
