@extends('website.layouts.master')
@section('title')
    {{ __('main.site') }} | {{ __('main.services') }}
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
                            <h2 class="title">{{ __('main.services') }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i
                                                class="fas fa-home"></i>{{ __('main.home') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('main.services') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- services-area -->
        <section class="services-area-five pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="services-item-five">
                                <div class="services-thumb-five">
                                    <a href="{{ Helper::link('service.details', $service->id, $service->title) }}"><img
                                            src="{{ asset($service->image) }}" alt=""></a>
                                </div>
                                <div class="services-content-five">
                                    <div class="icon">
                                        <img src="{{ asset($service->icon) }}">
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a
                                                href="{{ Helper::link('service.details', $service->id, $service->title) }}">{{ $service->title }}</a>
                                        </h4>
                                        <a href="{{ Helper::link('service.details', $service->id, $service->title) }}"
                                            class="link-btn">{{ __('main.Read More') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- services-area-end -->


    </main>
@endsection

@section('js')
@endsection
