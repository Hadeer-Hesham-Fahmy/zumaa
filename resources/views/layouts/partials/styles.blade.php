<link
    href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
<!-- Tailwind -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<livewire:styles />
{{-- <link href="{{ asset('css/easymde.min.css') }}" rel="stylesheet"> --}}
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<style>
    [x-cloak] {
        display: none !important;
    }

    @php $savedColor=setting('websiteColor', '#21a179');
    $appColor=new \OzdemirBurak\Iris\Color\Hex($savedColor);
    $appColorHsla=new \OzdemirBurak\Iris\Color\Hsla(''.$appColor->toHsla()->hue().',40%, 75%, 0.45');
    $colorShades=[50,
    100,
    200,
    300,
    400,
    500,
    600,
    700,
    800,
    900];
    $colorShadePercentages=[95,
    90,
    75,
    50,
    25,
    0,
    5,
    15,
    25,
    35];
    @endphp

    .focus\:shadow-outline-primary:focus {
        box-shadow: 0 0 0 3px {{ $appColorHsla }};
    }



    @foreach ($colorShades as $key => $colorShade)
        @php if($key < 5) {
            $appColorShade=$appColor->brighten($colorShadePercentages[$key]);
        }

        else {
            $appColorShade=$appColor->darken($colorShadePercentages[$key]);
        }
    @endphp

    .bg-primary-{{ $colorShade }} {
        background-color: {{ $appColorShade }} !important;
    }

    .focus\:border-primary-{{ $colorShade }}:focus {
        border-color: {{ $appColorShade }} !important;
    }

    .hover\:bg-primary-{{ $colorShade }}:hover {
        background-color: {{ $appColorShade }} !important;
    }

    .border-primary-{{ $colorShade }}:focus {
        border-color: {{ $appColorShade }} !important;
    }



    .text-primary-{{ $colorShade }} {
        color: {{ $appColorShade }} !important;
    }

    .ring-primary-{{ $colorShade }} {
        color: {{ $appColorShade }} !important;
    }

    .border-primary-{{ $colorShade }} {
        border-color: {{ $appColorShade }} !important;
    }

    @endforeach
</style>
