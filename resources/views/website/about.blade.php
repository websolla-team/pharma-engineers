@extends('website.layouts.master')
@section('title')
    {{ __('main.site') }} | {{ $page->title }}
@endsection
@section('css')
@endsection
@section('content')
    <main class="fix">
        <!-- breadcrumb-area -->

        <section class="breadcrumb-area breadcrumb-bg"
            style="background-image: url({{ asset($Setting->main_image) }}) !important">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">{{ $page->title }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i
                                                class="fas fa-home"></i>{{ __('main.home') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- about-area -->
        <section class="about-area pt-140 pb-40" data-animation="animationContainer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-50">
                            <span class="sub-title">
                                <strong class="left-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="18"
                                        viewBox="0 0 39 18" fill="none">
                                        <path d="M39 0V3.5H2.6L0 0H39Z" fill="currentcolor" />
                                        <path d="M39 7.20001V10.7H8.00002L5.40002 7.20001H39Z" fill="currentcolor" />
                                        <path d="M39 14.4V17.9H13.5L10.9 14.4H39Z" fill="currentcolor" />
                                    </svg>
                                </strong>
                                {{ $page->title }}
                                <strong class="right-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="18"
                                        viewBox="0 0 39 18" fill="none">
                                        <path d="M0 0V3.5H36.4L39 0H0Z" fill="currentcolor" />
                                        <path d="M0 7.20001V10.7H31L33.6 7.20001H0Z" fill="currentcolor" />
                                        <path d="M0 14.4V17.9H25.5L28.2 14.4H0Z" fill="currentcolor" />
                                    </svg>
                                </strong>
                            </span>
                            {{-- <h2 class="title" data-splitting="chars" data-animation="innerAnimated">Dear Colleagues,</h2> --}}
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="about-img-wrap">
                            <img src="{{ asset($page->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content about-list">
                            {!! $page->text !!}

                            <div class="about-content-bottom mt-4">
                                <a href="tel:{{ $Contact->phone1 }}" class="call-btn"><i
                                        class="fas fa-phone-alt"></i>{{ $Contact->phone1 }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-area pt-40 pb-40" data-animation="animationContainer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50">
                            <span class="sub-title">
                                <strong class="left-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="18"
                                        viewBox="0 0 39 18" fill="none">
                                        <path d="M39 0V3.5H2.6L0 0H39Z" fill="currentcolor" />
                                        <path d="M39 7.20001V10.7H8.00002L5.40002 7.20001H39Z" fill="currentcolor" />
                                        <path d="M39 14.4V17.9H13.5L10.9 14.4H39Z" fill="currentcolor" />
                                    </svg>
                                </strong>
                                {{ __('main.Our Philosophy') }}
                                <strong class="right-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="18"
                                        viewBox="0 0 39 18" fill="none">
                                        <path d="M0 0V3.5H36.4L39 0H0Z" fill="currentcolor" />
                                        <path d="M0 7.20001V10.7H31L33.6 7.20001H0Z" fill="currentcolor" />
                                        <path d="M0 14.4V17.9H25.5L28.2 14.4H0Z" fill="currentcolor" />
                                    </svg>
                                </strong>
                            </span>
                            <div>{!! $Setting->our_philosophy !!}</div>
                            {{-- <h2 class="title" data-splitting="chars" data-animation="innerAnimated">Dear Colleagues,</h2> --}}
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="about-area pt-40 pb-40" data-animation="animationContainer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50">
                            <span class="sub-title">
                                <strong class="left-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="18"
                                        viewBox="0 0 39 18" fill="none">
                                        <path d="M39 0V3.5H2.6L0 0H39Z" fill="currentcolor" />
                                        <path d="M39 7.20001V10.7H8.00002L5.40002 7.20001H39Z" fill="currentcolor" />
                                        <path d="M39 14.4V17.9H13.5L10.9 14.4H39Z" fill="currentcolor" />
                                    </svg>
                                </strong>
                                {{ __('main.Our Policy') }}
                                <strong class="right-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="18"
                                        viewBox="0 0 39 18" fill="none">
                                        <path d="M0 0V3.5H36.4L39 0H0Z" fill="currentcolor" />
                                        <path d="M0 7.20001V10.7H31L33.6 7.20001H0Z" fill="currentcolor" />
                                        <path d="M0 14.4V17.9H25.5L28.2 14.4H0Z" fill="currentcolor" />
                                    </svg>
                                </strong>
                            </span>
                            <div>{!! $Setting->our_policy !!}</div>
                            {{-- <h2 class="title" data-splitting="chars" data-animation="innerAnimated">Dear Colleagues,</h2> --}}
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="about-area pt-40 pb-40" data-animation="animationContainer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50">
                            <span class="sub-title">
                                <strong class="left-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="18"
                                        viewBox="0 0 39 18" fill="none">
                                        <path d="M39 0V3.5H2.6L0 0H39Z" fill="currentcolor" />
                                        <path d="M39 7.20001V10.7H8.00002L5.40002 7.20001H39Z" fill="currentcolor" />
                                        <path d="M39 14.4V17.9H13.5L10.9 14.4H39Z" fill="currentcolor" />
                                    </svg>
                                </strong>
                                {{ __('main.Mission Statement') }}
                                <strong class="right-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="18"
                                        viewBox="0 0 39 18" fill="none">
                                        <path d="M0 0V3.5H36.4L39 0H0Z" fill="currentcolor" />
                                        <path d="M0 7.20001V10.7H31L33.6 7.20001H0Z" fill="currentcolor" />
                                        <path d="M0 14.4V17.9H25.5L28.2 14.4H0Z" fill="currentcolor" />
                                    </svg>
                                </strong>
                            </span>
                            <div>{!! $Setting->mission_statement !!}</div>
                            {{-- <h2 class="title" data-splitting="chars" data-animation="innerAnimated">Dear Colleagues,</h2> --}}
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- about-area-end -->
    </main>
@endsection
