<x-form noClass="true" action="saveOrderSettings">

    <div class='grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3'>
        <div>
            <x-input title="Ordering Rate Limit" name="orderRetryAfter" type="number" />
            <p class="text-xs text-gray-400 mt-1">{{ __('The number of seconds to wait before retrying an order.') }}</p>
        </div>

    </div>

    {{-- save button --}}
    <div class="flex justify-end mt-4">
        <x-buttons.primary class="ml-4">
            {{ __('Save') }}
        </x-buttons.primary>
    </div>
</x-form>
