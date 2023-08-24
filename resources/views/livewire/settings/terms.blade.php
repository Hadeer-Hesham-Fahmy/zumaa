<div wire:init="setupData">


    <x-form action="saveTermsSettings" :noClass="true">
        <p>
            <span class="font-bold">Link:</span>
            <br />
            <a href="{{ url(route('terms')) }}" target="_blank" class="underline">{{ url(route('terms')) }}</a>
        </p>
        <div class="w-full md:w-4/5 lg:w-5/12">

            <div class="mb-4">
                <x-label title="{!! __('Terms & Condition') !!}" />
            </div>
            {{-- <textarea id="terms" wire:model.defer="terms" class="w-full h-64 p-2 border border-black rounded-sm"></textarea> --}}
            <div id="terms"></div>
            <div class="hidden">
                <input type="text" id="termsTextArea" wire:model.defer="terms" />
            </div>

            <x-buttons.primary title="{{ __('Save Changes') }}" />

        </div>
    </x-form>



</div>
