@extends('website.layouts.master')
@section('title')
    {{ __('main.site') }} | {{ __('main.blogs') }}
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
                            <h2 class="title">{{ __('main.Blogs') }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i
                                                class="fas fa-home"></i>{{ __('main.home') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('main.Blogs') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-post-area -->
        <section class="blog-post-area blog-style-one pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item-two">
                                <div class="blog-post-thumb">
                                    <a href="{{ Helper::link('blog.details', $blog->id, $blog->title) }}"><img
                                            src="{{ asset($blog->image) }}" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-meta">
                                    </div>
                                    <h3 class="title"><a
                                            href="{{ Helper::link('blog.details', $blog->id, $blog->title) }}">{{ $blog->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="see-more-btn text-center mt-30">
                    <a href="#" class="btn btn-three">See More</a>
                </div> --}}
            </div>
        </section>
        <!-- blog-post-area-end -->

        <!-- brand-area -->
        <div class="brand-area-two">
            <div class="container custom-container">
                <div class="row brand-active">
                    @foreach ($brands as $brand)
                        <div class="col-12">
                            <div class="brand-item-two">
                                <img src="{{ asset($brand->image) }}" alt="image">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

    </main>
@endsection
