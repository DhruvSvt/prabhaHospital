<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title ?? 'HOME' }} | Prabha Hospital & Trauma Center | Best Multispeciality Hospital in Agra</title>
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon"
        href="{{ config('app.url') }}/assets/img/prabhaicon-removebg-preview.png" />

    <meta name="keywords"
        content="best Trauma Center in india, hospitals in india, best neurologist in india, best orthopaedic hospital in india, super speciality hospital near me">

    <meta name="description"
        content="{{ $description ??
            'Prabha Hospitals is the leading multispecialty health care unit with advanced facilities
        and qualified & trained nursing staff in all wards having 110 beds including ICU, CCU, PICU, NICU, Emergency, Trauma and BURN Unit.' }}" />

    <meta name="theme-color" content="#423a7a">
    <meta name="msapplication-TileColor" content="#423a7a">
    <meta name="msapplication-navbutton-color" content="#423a7a">
    <meta name="apple-mobile-web-app-status-bar-style" content="#423a7a">

    <meta property="fb:app_id" content="215285942559908" />
    <meta property="og:url" content="{{ config('app.url') }}/" />
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="{{ $title ?? 'Prabha Hospital & Trauma Center | Best Multispeciality Hospital in Agra' }}" />
    <meta property="og:description"
        content="{{ $description ??
            'Prabha Hospitals is the leading multispecialty health care unit with advanced facilities and qualified & trained nursing staff in all wards having 110 beds including ICU, CCU, PICU, NICU, Emergency, Trauma and BURN Unit.' }}" />
    <meta property="og:image" content="{{ $ogImage ??
             config('app.url') .'/assets/img/prabhaicon-removebg-preview.png'}}">


    @include('visitors.inc.headLinks')
    @yield('head')
</head>

<body>
    <!-- START PRELOADER -->

    <!-- END PRELOADER -->
    <!-- START HEADER SECTION -->
    @include('visitors.inc.header')
    <!-- END HEADER SECTION -->
    <!-- START SLIDER SECTION -->
    @yield('content')
    <!-- END CLIENT SECTION -->
    <!-- START FOOTER -->

    @include('visitors.inc.footer')
    @include('visitors.inc.footerlinks')
    @yield('scripts')
    <!-- Latest jQuery -->

</body>

</html>
