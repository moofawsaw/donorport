<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
    <title>{{ config('app.name', 'Donor port') }} | Home </title>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Webflow" name="generator">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/webflow.css') }}" rel="stylesheet">
    <link href="{{ asset('css/boonbay.webflow.css') }}" rel="stylesheet">
        <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
        <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="{{ asset('images/favicon.png') }}" rel="stylesheet">
    <link href="{{ asset('images/webclip.png') }}" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script defer="" type="text/javascript" src="https://cdn.statically.io/gh/malchata/yall.js/main/dist/yall.min.js"></script>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">






    <meta name="theme-color" content="#6d6bb5">
    <meta name="msapplication-TileColor" content="#6d6bb5">
    <meta name="msapplication-navbutton-color" content="#6d6bb5">
    <meta name="apple-mobile-web-app-status-bar-style" content="#6d6bb5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.10/lottie.min.js" integrity="sha256-/56Y/jYu6730zlN8iulnNWn2IcVa4wK/ogwk7n9p2JY=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.1.0/autoNumeric.min.js"></script>
    <style>
        .post__list .post__item {
            width: calc(100% / 4);
        }
        .post__list[max-width~="1250px"] .post__item {
            width: calc(100% / 3);
        }
        @media only screen and (max-width: 1250px) {
            .post__list .post__item {
                width: calc(100% / 3);
            }
        }
        .post__list[max-width~="950px"] .post__item {
            width: calc(100% / 2);
        }
        @media only screen and (max-width: 950px) {
            .post__list .post__item {
                width: calc(100% / 2);
            }
        }
        .post__list[max-width~="550px"] .post__item {
            width: 100%;
        }
        @media only screen and (max-width: 550px) {
            .post__list .post__item {
                width: 100%;
            }
        }
        .underline {
            color: orange !important;
            text-decoration: underline !important;
        }
    </style>
</head>
<body>
<div id="app">

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
