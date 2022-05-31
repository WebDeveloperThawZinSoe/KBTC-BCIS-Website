<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}">


    <!-- Necessary File -->
    <link rel="stylesheet" href="{{ asset('website/assets/web/assets/mobirise-icons2/mobirise2.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/parallax/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/animatecss/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/theme/css/style.css') }}">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
    <link rel="preload" as="style" href="{{ asset('website/css/app.css') }}"><link rel="stylesheet" href="website/assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="website/assets/mobirise/css/mbr-additional.css">

</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
