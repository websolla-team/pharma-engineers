@extends('website.layouts.master')
@section('title')
    {{ __('main.site') }} | {{ $gallery->title }}
@endsection
@section('css')
@endsection
@section('content')
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg"
            style="background-image: url({{ asset($Setting->main_image) }}) !important">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">{{ $gallery->title }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i
                                                class="fas fa-home"></i>{{ __('main.home') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $gallery->title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- project-details-area -->
        <section class="project-details-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="project-details-img">
                            <img src="{{ asset($gallery->image) }}" alt="image">
                        </div>
                        <div class="project-details-content">
                            <div class="project-details-inner">
                                <div class="row">
                                    {{-- <div class="col-lg-4 oeder-0 order-lg-2">
                                        <div class="project-details-info">
                                            <div class="info-list">
                                                <ul class="list-wrap">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="far fa-user"></i>
                                                        </div>
                                                        <div class="content">
                                                            <span>Created By:</span>
                                                            <h6 class="title">Mike Hardson</h6>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-calendar-alt"></i>
                                                        </div>
                                                        <div class="content">
                                                            <span>Project Completed:</span>
                                                            <h6 class="title">23, Jun 2023</h6>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="content">
                                                            <span>Location:</span>
                                                            <h6 class="title">43B, Road Worldwide Country, USA</h6>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="project-details-social">
                                                <h6 class="title">Follow Us:</h6>
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-12">
                                        <div class="pd-inner-content">
                                            <h2 class="title">{{ $gallery->title }}</h2>
                                            <div>{!! $gallery->description !!}</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- project-details-area-end -->

        <!-- project-area -->
        <section class="project-area-five pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-50">
                            <h2 class="title">{{ __('main.See More Projects') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row project-active-five">
                    @foreach ($galleries as $gal)
                        <div class="col-lg-4">
                            <div class="project-item-two">
                                <div class="project-thumb-two">
                                    <a href="{{ Helper::link('gallery.details', $gal->id, $gal->title) }}"><img
                                            src="{{ asset($gal->image) }}" alt=""></a>
                                </div>
                                <div class="project-content-two">
                                    <span>{{ $gal->category->title }}</span>
                                    <h3 class="title"><a
                                            href="{{ Helper::link('gallery.details', $gal->id, $gal->title) }}">{{ $gal->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- project-area-end -->



    </main>
@endsection
