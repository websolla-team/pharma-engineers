@extends('website.layouts.master')
@section('title')
    {{ __('main.site') }} | {{ $service->title }}
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
                            <h2 class="title">{{ $service->title }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i
                                                class="fas fa-home"></i>{{ __('main.home') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- services-details-area -->
        <section class="services-details-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 order-0 order-lg-2">
                        <div class="services-details-wrap">
                            <div class="services-details-img">
                                <img src="{{ asset($service->image) }}" alt="">
                            </div>
                            <div class="services-details-content bold-info">
                                <h2 class="title">{{ $service->title }}</h2>
                                {!! $service->text !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10">
                        <aside class="services-sidebar">
                            <div class="services-widget">
                                <div class="services-cat-list">
                                    <ul class="list-wrap">
                                        @foreach ($services as $service)
                                            <li><a
                                                    href="{{ Helper::link('service.details', $service->id, $service->title) }}">{{ $service->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="services-widget">
                                <div class="services-contact"
                                    data-background="{{ asset('website/assets/img/services/services_contact_bg.jpg') }}">
                                    <span>{{ __('main.Contact us at the Industrial') }}</span>
                                    <h2 class="title">{{ __('main.Get A Free Quote For Industry & Factory') }}</h2>
                                    <a href="{{ route('contacts') }}" class="btn">{{ __('main.Send Messages') }}</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-details-area-end -->
    </main>
@endsection
