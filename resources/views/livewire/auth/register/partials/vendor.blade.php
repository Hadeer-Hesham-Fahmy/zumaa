<form wire:submit.prevent="signUp">
    @csrf
    <h1 class="mb-4 font-semibold text-gray-700 text-md">
        {{ __('Business Information') }} </h1>
    <x-input title="{{ __('Business Name') }}" name="vendor_name" placeholder="" />
    {{-- vendor type --}}
    <x-select title="{{ __('Vendor Type') }}" :options='$vendorTypes ?? []' name="vendor_type_id" :defer="false" />
    <div class="grid grid-cols-1 gap-0 md:gap-4 md:grid-cols-2">
        <x-input title="{{ __('Email') }}" name="vendor_email" placeholder="info@mail.com" />
        <x-phoneselector model="vendor_phone" />
    </div>

    {{-- documents  --}}
    <hr class="my-4" />
    <p class="font-light">{{ __('Documents') }}</p>
    <livewire:component.multiple-media-upload title="{{ setting('page.settings.vendorDocumentInstructions', __('Documents')) }}" types="PNG or JPEG" fileTypes="image/*" emitFunction="vendorDocumentsUploaded" max="{{ setting('page.settings.vendorDocumentCount', 3) }}" />
    <x-input-error message="{{ $errors->first('vendorDocuments') }}" />

    {{-- divider  --}}
    <hr class="my-4" />
    <h1 class="mb-4 font-semibold text-gray-700 text-md">
        {{ __('Personal Information') }} </h1>
    <x-input title="{{ __('Name') }}" name="name" placeholder="John" />
    <div class="grid grid-cols-2 space-x-4">
        <x-input title="{{ __('Email') }}" name="email" placeholder="info@mail.com" />
        {{--  <x-input title="{{ __('Phone') }}" name="phone" placeholder="+2335575..." />  --}}
        <x-phoneselector />
    </div>
    <x-input title="{{ __('Login Password') }}" name="password" type="password" placeholder="**********************" />
    <div class="flex items-center my-3">
        <x-checkbox name="agreedVendor" :defer="false" :noMargin="true"> <span>{{ __("I agree with") }} <a href="{{ route('terms') }}" target="_blank" class="font-bold text-primary-500 hover:underline">{{ __("terms and conditions") }}</a></span>
        </x-checkbox>
    </div>
    <x-buttons.primary title="{{__('Sign Up')}}" />
</form>
