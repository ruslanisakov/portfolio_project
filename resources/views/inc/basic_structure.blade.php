<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{asset('css/main/colors.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/preloaders/preloader.css')}}" type="text/css" media="all">
    <script src="{{asset('js/preloaders/preloader.js')}}"></script>
    @yield('main_styles')
    @yield('custom_style')
</head>
<body>
    @include('preloaders.preloader')

    @yield('preloader')
    @yield('content')

    @yield('main_scripts')
    @yield('custom_scripts')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GXBJYBPN3N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-GXBJYBPN3N');
    </script>
</body>
</html>
