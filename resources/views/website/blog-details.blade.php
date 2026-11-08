@extends('website.layouts.master')
@section('title')
    {{ __('main.site') }} | {{ $blog->title }}
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
                            <h2 class="title">{{ $blog->title }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i
                                                class="fas fa-home"></i>{{ __('maain.home') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- blog-details-area -->
        <section class="blog-details-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="blog-details-wrap">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img src="{{ asset($blog->image) }}" alt="">
                                </div>
                                <div class="blog-content blog-details-content">
                                    <div class="blog-meta">

                                    </div>
                                    <h2 class="title">{{ $blog->title }}</h2>
                                    {!! $blog->text !!}
                                    <div class="bd-img-wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="assets/img/blog/blog_details_img02.jpg" alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <img src="assets/img/blog/blog_details_img03.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10">
                        <aside class="blog-sidebar">
                            <div class="blog-widget">
                                <h4 class="widget-title">{{ __('main.Recent Post') }}</h4>
                                <div class="rc-post-list">
                                    @foreach ($blogs->take(5) as $blog)
                                        <div class="rc-post-item">
                                            <div class="thumb">
                                                <a href="{{ Helper::link('blog.details', $blog->id, $blog->title) }}"><img
                                                        src="{{ asset($blog->image) }}" alt="image"></a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a
                                                        href="{{ Helper::link('blog.details', $blog->id, $blog->title) }}">Interactive
                                                        Technologies In
                                                        {{ $blog->title }}</a></h4>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->
    </main>
@endsection
