    <title>@yield('title', 'Bike Plus - Home')</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="description" content="Pharma Engineers">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website/assets/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/tg-cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/splitting.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/responsive.css') }}">

    <style>
        .breadcrumb-bg {
            padding: 250px 0 90px;
            background-position: center right;
            background-image: url('assets/me/bread.jpg') !important;
        }

        @media (max-width: 767.98px) {
            .breadcrumb-bg {
                padding: 165px 0 80px;
            }
        }
    </style>

    @if (app()->getLocale() == 'ar')
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('website/assets/css/style-rtl.css') }}">
    @endif
    @yield('css')
