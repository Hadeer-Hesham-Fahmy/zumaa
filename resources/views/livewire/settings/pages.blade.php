@section('title', __('Page Settings'))
<div>

    <x-baseview title="{{ __('Page Settings') }}">

        <x-tab.tabview class="shadow pb-10">

            <x-slot name="header">
                <x-tab.header tab="1" title="{{ __('Privacy Policy') }}" />
                <x-tab.header tab="2" title="{{ __('Contact Info') }}" />
                <x-tab.header tab="3" title="{!! __('Terms & Condition') !!}" />
                @can('change-order-cancel-reason')
                    <x-tab.header tab="4" title="{!! __('Order cancellation reasons') !!}" />
                @endcan
            </x-slot>

            <x-slot name="body">
                <x-tab.body tab="1">
                    <livewire:settings.privacy-policy />
                </x-tab.body>
                <x-tab.body tab="2">
                    <livewire:settings.contact />
                </x-tab.body>
                <x-tab.body tab="3">
                    <livewire:settings.terms />
                </x-tab.body>
                @can('change-order-cancel-reason')
                    <x-tab.body tab="4">
                        <livewire:settings.order-reasons />
                    </x-tab.body>
                @endcan
            </x-slot>

        </x-tab.tabview>
    </x-baseview>

    @include('layouts.partials.wysisyg')
    <x-loading />
</div>
