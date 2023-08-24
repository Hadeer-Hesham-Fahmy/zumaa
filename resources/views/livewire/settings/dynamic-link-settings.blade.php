@section('title', __('Dynamic Link Settings'))
<div>

    <x-baseview title="{{ __('Dynamic Link Settings') }}">

        <x-form action="saveSettings">

            <div class="">
                <div class='grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3'>
                    <x-input title="{{ __('Dynamic link prefix') }}" placeholder="{{ __('e.g glover.page.link') }}" name="prefix" />
                    <x-input title="{{ __('Customer App - Android Package Name') }}" placeholder="{{ __('e.g com.glover.customer') }}" name="android" />
                    <x-input title="{{ __('Customer App - iOS Bundle ID') }}" placeholder="{{ __('e.g com.glover.customer') }}" name="ios" />

                </div>
                <x-buttons.primary title="{{ __('Save Changes') }}" />
            </div>
        </x-form>

    </x-baseview>

</div>
