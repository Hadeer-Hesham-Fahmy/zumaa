@section('title',  __('Website Settings') )
<div>

    <x-baseview title="{{ __('Website Settings') }}">

        <x-form action="saveAppSettings">

            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                <div class="space-y-6">
                    

                    <x-details.p text="{{ __('Website Header Subtitle') }}">
                        <textarea id="contactInfo" wire:model.defer="websiteHeaderSubtitle"
                            class="w-full h-64 p-2 border border-black rounded-sm"></textarea>
                    </x-details.p>

                    <x-details.p text="{{ __('Website Footer Brief') }}">
                        <textarea id="contactInfo" wire:model.defer="websiteFooterBrief"
                            class="w-full h-64 p-2 border border-black rounded-sm"></textarea>
                    </x-details.p>

                    
                </div>
                <div class="space-y-6">
                    <x-details.p text="{{ __('Website Header Title') }}">
                        <x-input name="websiteHeaderTitle" noMargin="true" />
                    </x-details.p>
                    <div>
                        {{-- logo --}}
                        <div class="flex items-center mt-5 space-x-10">

                            <img src="{{ $websiteHeaderImage != null ? $websiteHeaderImage->temporaryUrl() : $oldWebsiteHeaderImage }}"
                                class="w-24 h-24 rounded" />

                            <x-input title="{{ __('Website Home Image') }}" name="websiteHeaderImage" :defer="false" type="file" />
                        </div>

                    </div>
                    <div>
                        {{-- intro image --}}
                        <div class="flex items-center mt-5 space-x-10">

                            <img src="{{ $websiteIntroImage != null ? $websiteIntroImage->temporaryUrl() : $oldWebsiteIntroImage }}"
                                class="w-24 h-24 rounded" />

                            <x-input title="{{ __('Website Intro Image') }}" name="websiteIntroImage" :defer="false" type="file" />
                        </div>

                    </div>
                    <div>
                        {{-- footer image --}}
                        <div class="flex items-center mt-5 space-x-10">

                            <img src="{{ $websiteFooterImage != null ? $websiteFooterImage->temporaryUrl() : $oldWebsiteFooterImage }}"
                                class="w-24 h-24 rounded" />

                            <x-input title="{{ __('Website Footer Image') }}" name="websiteFooterImage" :defer="false" type="file" />
                        </div>

                    </div>
                    <x-input name="fbLink" title="{{ __('Facebook Link') }}" />
                    <x-input name="igLink" title="{{ __('Instagram Link') }}" />
                    <x-input name="twLink" title="{{ __('Twitter Link') }}" />
                </div>
            </div>
            <div class="w-full md:w-6/12">
                <x-buttons.primary title="{{ __('Save Changes') }}" />
            </div>
        </x-form>

    </x-baseview>

</div>
