<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('layouts.head')
    @if (app()->getLocale() == 'ar')
        <style>
            @media (max-width: 767px) {
                .app .app-sidebar {
                    left: unset;
                    right: -240px !important;
                }
            }

            @media (max-width: 767px) {
                .app.sidebar-gone.sidenav-toggled .app-sidebar {
                    left: unset;
                    right: 0 !important;
                }

                .responsive-logo img {
                    display: none !important;
                }
            }
        </style>
    @endif
</head>

<body class="main-body app sidebar-mini">
    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ URL::asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->
    @include('layouts.main-sidebar')
    <!-- main-content -->
    <div class="main-content app-content">
        @include('layouts.main-header')
        <!-- container -->
        <div class="container-fluid">
            @yield('page-header')
            @yield('content')
            {{-- @include('layouts.sidebar') --}}
            {{-- @include('layouts.models') --}}
            @include('layouts.footer')
            @include('layouts.footer-scripts')
</body>

</html>
