<div wire:init="setupData">

    <x-form action="saveContactInfo" :noClass="true">
        <p>
            <span class="font-bold">Link:</span>
            <br />
            <a href="{{ url(route('contact')) }}" target="_blank" class="underline">{{ url(route('contact')) }}</a>
        </p>
        <div class="w-full md:w-4/5 lg:w-5/12">

            <div class="mb-4">
                <x-label title="{{ __('Contact Info') }}" />
            </div>
            {{-- <textarea id="contactInfo" wire:model.defer="contactInfo" class="w-full h-64 p-2 border border-black rounded-sm"></textarea> --}}

            <div id="contactInfo"></div>
            <div class="hidden">
                <input type="text" id="contactInfoTextArea" wire:model.defer="contactInfo" />
            </div>

            <x-buttons.primary title="{{ __('Save Changes') }}" />

        </div>
    </x-form>

</div>
