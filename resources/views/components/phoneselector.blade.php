<div>
    <div wire:ignore>
        @php
        if(empty($inputId)){
        $inputId = $model ?? 'phone';
        $inputId .= rand(1000,99999);
        }
        $modelId = $model ?? 'phone';
        $phoneInitData = [$inputId,$modelId,$value ?? '' ];
        @endphp
        <div class="phoneInitDiv" data-value="{{ json_encode($phoneInitData) }}">
            <x-label title="{{ $title ?? __('Phone') }}" />
            <x-input id="{{ $inputId }}" name="{{ $modelId }}" />
            <input wire:model="{{ $modelId }}" type="hidden" id="{{ $modelId }}" name="{{ $modelId }}" value="{{ $value ?? '' }}" />
        </div>
    </div>
    <x-input-error message="{{ $errors->first( $modelId ) }}" />
</div>
