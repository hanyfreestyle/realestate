<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  {!!htmlArDir()!!}  >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! SEO::generate() !!}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ defWebAssets('css/fonts/material-icon.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('fonts/fontawesome_all.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/fonts/ff-1.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style.css') }}">

    <link rel="stylesheet" href="{{ defWebAssets('css/style_footer.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style_default.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style_header.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style_blog.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style_project_card.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style_developers.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style_compounds.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style_listing_view.css') }}">

{{--    <link rel="stylesheet" href="{{ defWebAssets('css/style_def.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ defWebAssets('css/style_edit.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ defWebAssets('css/style_serach_form.css') }}">--}}
    <link rel="stylesheet" href="{{ defWebAssets('css/style_edit_'.thisCurrentLocale().'.css') }}">

    @livewireStyles
</head>
<body>

@if($_SERVER['HTTP_HOST'] != 'localhost' )
    @include('web.layouts.inc.preloader')
@endif

@include('web.layouts.inc.header_top')
@include('web.layouts.inc.header_menu')
@yield('content')


@include('web.layouts.inc.footer')

<script src="{{ defWebAssets('js/jquery-3.7.1.js') }}" ></script>
<script src="{{ defWebAssets('js/leaflet.js') }}"></script>
<script src="{{ defWebAssets('js/plugins.js') }}"></script>
<script src="{{ defWebAssets('js/app.js') }}"></script>
<script src="{{ defWebAssets('js/app_slider.js') }}"></script>
<script src="{{ defWebAssets('js/app_script.js') }}"></script>
<script>
    async function loadarfont(){
        const font_ar = new FontFace('Aljazeera','url({{ defWebAssets('fonts/Ar/Aljazeera.woff') }}');
        await font_ar.load();
        document.fonts.add(font_ar);
        document.body.classList.add('Aljazeera');
    };
    loadarfont();


    async function loadar_2font(){
        const font2_ar = new FontFace('Tajawal','url({{ defWebAssets('fonts/Ar/TajawalRegular.woff2') }}');
        await font2_ar.load();
        document.fonts.add(font2_ar);
        document.body.classList.add('Tajawal');
    };
    loadar_2font();


    async function loadarfont_en(){
        const font_en = new FontFace('Poppins','url({{ defWebAssets('fonts/En/Poppins-Regular.woff2') }}');
        await font_en.load();
        document.fonts.add(font_en);
        document.body.classList.add('Poppins');
    };
    loadarfont_en();
</script>
<x-js.show-more-show-less/>
@livewireScripts
<script>
    document.addEventListener('livewire:load', () => {
        Livewire.onPageExpired((response, message) => {})
    })
</script>
</body>
</html>
