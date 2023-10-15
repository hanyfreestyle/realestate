<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  {!!htmlArDir()!!}  >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! SEO::generate() !!}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ defWebAssets('css/fonts/material-icon.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('fonts/fontawesome_all.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/fonts/ff-1.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style.css') }}">

    <link rel="stylesheet" href="{{ defWebAssets('css/style_def.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style_edit.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style_edit.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style_edit_'.thisCurrentLocale().'.css') }}">
    @livewireStyles
</head>
<body>
{{--@include('web.layouts.inc.preloader')--}}
@include('web.layouts.inc.header_top')
@include('web.layouts.inc.header_menu')

@yield('content')


@include('web.layouts.inc.footer')


<script src="{{ defWebAssets('js/jquery-3.7.1.js') }}" ></script>
<script src="{{ defWebAssets('js/leaflet.js') }}"></script>
<script src="{{ defWebAssets('js/plugins.js') }}"></script>
<script src="{{ defWebAssets('js/app.js') }}"></script>
<script src="{{ defWebAssets('js/app_script.js') }}"></script>
@livewireScripts
<script>
    document.addEventListener('livewire:load', () => {
        Livewire.onPageExpired((response, message) => {})
    })
</script>
</body>
</html>
