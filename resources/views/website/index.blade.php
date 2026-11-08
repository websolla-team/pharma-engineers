@extends('website.layouts.master')
@section('title')
    {{ __('main.site') }} | {{ __('main.home') }}
@endsection
@section('css')
    <style>
        .rs-banner-slider-wrapper {
            text-align: right;
        }

        .rs-banner-one .slide-img {
            width: calc(100% - 100px);
        }

        .slider-btn {
            position: absolute;
            left: 170px;
            bottom: 70px;
        }

        @media only screen and (max-width: 991px) {
            .rs-banner-one .slide-img {
                width: 100%;
            }

            .slider-btn {
                left: 70px;
                bottom: 70px;
            }
        }

        @media only screen and (max-width: 500px) {
            .slider-btn {
                left: 40px;
                bottom: 40px;
            }

            .slider-btn a {
                height: unset;
                padding: 8px 12px;
                font-size: 14px;
            }
        }
    </style>
@endsection
@section('content')
    <!-- main-area -->
    <main class="fix">

        <!-- slider-area -->
        <section class="slider-area-two">
            <div class="slider-active-two">
                @foreach ($slider as $slide)
                    <div class="single-slider slider-bg-two" style="background-image: url({{ asset($slide->image) }})">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="slider-content-two">
                                        <h2 class="title invisible" data-animation-in="fadeInUp" data-delay-in=".4"
                                            data-duration-in="1.5"></h2>
                                        <div class="slider-btn">
                                            <a href="{{ route('gallery') }}" class="btn" data-animation-in="fadeInLeft"
                                                data-delay-in=".6" data-duration-in="1.5">{{ __('main.OUR Projects') }}</a>
                                            <a href="{{ route('services') }}" class="btn btn-two"
                                                data-animation-in="fadeInRight" data-delay-in=".6"
                                                data-duration-in="1.5">{{ __('main.OUR Services') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="slider-nav"></div>
        </section>
        <!-- slider-area-end -->

        <!-- services-area -->
        <section class="services-area-two" data-animation="animationContainer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title title-style-two text-center mb-60">
                            <span class="sub-title">{{ __('main.The Best Industry services') }}</span>
                            <h2 class="title" data-splitting="chars" data-animation="innerAnimated">
                                {{ __('main.Provide Awesome Services For Industrial Company') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="services-item-wrap">
                    <div class="row">
                        @foreach ($services as $service)
                            <div class="col-md-4">
                                <div class="services-item-two">
                                    <div class="services-thumb-two">
                                        <a href="{{ Helper::link('service.details', $service->id, $service->title) }}"><img
                                                src="{{ asset($service->image) }}" alt="image"></a>
                                        <div class="services-icon-two">
                                            <img src="{{ asset($service->icon) }}" alt="icon">
                                        </div>
                                    </div>
                                    <div class="services-content-two">
                                        <h3 class="title"><a
                                                href="{{ Helper::link('service.details', $service->id, $service->title) }}">{{ $service->title }}</a>
                                        </h3>
                                        <a href="{{ Helper::link('service.details', $service->id, $service->title) }}"
                                            class="link-btn">{{ __('main.Read More') }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>
        <!-- services-area-end -->

        <!-- counter-area -->
        <section class="counter-area-two">
            <div class="counter-bg" data-background="{{ asset('website/assets/img/bg/area_bg.jpg') }}"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="counter-item">
                            <div class="counter-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" fill="none">
                                    <path
                                        d="M32.5 40.6248C42.5965 40.6248 50.7812 32.7432 50.7812 23.0207C50.7812 13.2982 42.5965 5.4165 32.5 5.4165C22.4035 5.4165 14.2188 13.2982 14.2188 23.0207C14.2188 32.7432 22.4035 40.6248 32.5 40.6248Z"
                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M20.3666 36.6164L20.3396 56.6039C20.3396 59.0414 22.0459 60.2331 24.1584 59.231L31.4167 55.7914C32.0125 55.4935 33.0146 55.4935 33.6104 55.7914L40.8958 59.231C42.9813 60.206 44.7146 59.0414 44.7146 56.6039V36.1289"
                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="counter-content">
                                <h2 class="count"><span class="odometer" data-count="2562"></span>+</h2>
                                <p>{{ __('main.Satisfied Clients') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="counter-item">
                            <div class="counter-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 54" fill="none">
                                    <path
                                        d="M33.4999 28.4495V35.2744C33.4999 40.9744 31.2249 43.2494 25.5249 43.2494H18.725C13.05 43.2494 10.75 40.9744 10.75 35.2744V28.4495C10.75 22.7745 13.025 20.4995 18.725 20.4995H25.5499C31.2249 20.4995 33.4999 22.7745 33.4999 28.4495Z"
                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M43.2498 18.6995V25.5244C43.2498 31.2244 40.9748 33.4994 35.2748 33.4994H33.4998V28.4494C33.4998 22.7744 31.2248 20.4995 25.5249 20.4995H20.4999V18.6995C20.4999 12.9995 22.7749 10.7495 28.4748 10.7495H35.2998C40.9748 10.7495 43.2498 13.0245 43.2498 18.6995Z"
                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M51.9998 34.5005C51.9998 44.1754 44.1748 52.0004 34.4999 52.0004L37.1249 47.6254"
                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M2 19.4999C2 9.82496 9.82496 2 19.4999 2L16.8749 6.37498" stroke="currentcolor"
                                        stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="counter-content">
                                <h2 class="count"><span class="odometer" data-count="176"></span>+</h2>
                                <p>{{ __('main.Active Project') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="counter-item">
                            <div class="counter-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49 49" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.125 1.35417C8.125 0.995019 8.26767 0.650582 8.52163 0.396626C8.77558 0.142671 9.12002 0 9.47917 0H39.2708C39.63 0 39.9744 0.142671 40.2284 0.396626C40.4823 0.650582 40.625 0.995019 40.625 1.35417V2.70833H47.3958C47.755 2.70833 48.0994 2.851 48.3534 3.10496C48.6073 3.35892 48.75 3.70335 48.75 4.0625V12.1875C48.75 13.9832 48.0366 15.7054 46.7669 16.9752C45.4971 18.245 43.7749 18.9583 41.9792 18.9583H39.7001C37.6133 24.8625 32.2116 29.2012 25.7292 29.7361V37.9167H35.2083C35.5675 37.9167 35.9119 38.0593 36.1659 38.3133C36.4198 38.5672 36.5625 38.9117 36.5625 39.2708V47.3958C36.5625 47.755 36.4198 48.0994 36.1659 48.3534C35.9119 48.6073 35.5675 48.75 35.2083 48.75H13.5417C13.1825 48.75 12.8381 48.6073 12.5841 48.3534C12.3302 48.0994 12.1875 47.755 12.1875 47.3958V39.2708C12.1875 38.9117 12.3302 38.5672 12.5841 38.3133C12.8381 38.0593 13.1825 37.9167 13.5417 37.9167H23.0208V29.7361C16.5398 29.2012 11.1367 24.8625 9.0499 18.9583H6.77083C4.9751 18.9583 3.25291 18.245 1.98313 16.9752C0.713354 15.7054 0 13.9832 0 12.1875V4.0625C0 3.70335 0.142671 3.35892 0.396626 3.10496C0.650582 2.851 0.995019 2.70833 1.35417 2.70833H8.125V1.35417ZM37.9167 13.5417V2.70833H10.8333V13.5417C10.8333 21.0207 16.8959 27.0833 24.375 27.0833C31.8541 27.0833 37.9167 21.0207 37.9167 13.5417ZM40.625 5.41667V16.25H41.9792C43.0566 16.25 44.0899 15.822 44.8518 15.0601C45.6137 14.2983 46.0417 13.2649 46.0417 12.1875V5.41667H40.625ZM2.70833 5.41667H8.125V16.25H6.77083C5.69339 16.25 4.66008 15.822 3.89821 15.0601C3.13634 14.2983 2.70833 13.2649 2.70833 12.1875V5.41667ZM14.8958 40.625V46.0417H33.8542V40.625H14.8958Z"
                                        fill="currentcolor" />
                                </svg>
                            </div>
                            <div class="counter-content">
                                <h2 class="count"><span class="odometer" data-count="28"></span>+</h2>
                                <p>{{ __('main.Winning Award') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="counter-item">
                            <div class="counter-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60" fill="none">
                                    <path
                                        d="M44.9999 17.9C44.8499 17.875 44.675 17.875 44.525 17.9C41.075 17.775 38.325 14.95 38.325 11.45C38.325 7.875 41.1999 5 44.7749 5C48.3499 5 51.2249 7.9 51.2249 11.45C51.1999 14.95 48.4499 17.775 44.9999 17.9Z"
                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M42.4249 36.0999C45.8499 36.6749 49.6249 36.0749 52.2749 34.2999C55.7999 31.9499 55.7999 28.0999 52.2749 25.7499C49.5999 23.9749 45.7749 23.3749 42.3499 23.9749"
                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M14.9247 17.9C15.0747 17.875 15.2497 17.875 15.3997 17.9C18.8497 17.775 21.5997 14.95 21.5997 11.45C21.5997 7.875 18.7247 5 15.1497 5C11.5747 5 8.69971 7.9 8.69971 11.45C8.72471 14.95 11.4747 17.775 14.9247 17.9Z"
                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M17.4998 36.0999C14.0748 36.6749 10.2999 36.0749 7.64985 34.2999C4.12485 31.9499 4.12485 28.0999 7.64985 25.7499C10.3249 23.9749 14.1498 23.3749 17.5748 23.9749"
                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M29.9997 36.5748C29.8497 36.5498 29.6747 36.5498 29.5247 36.5748C26.0747 36.4498 23.3247 33.6248 23.3247 30.1248C23.3247 26.5498 26.1997 23.6748 29.7747 23.6748C33.3497 23.6748 36.2247 26.5748 36.2247 30.1248C36.1997 33.6248 33.4497 36.4748 29.9997 36.5748Z"
                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M22.7248 44.4494C19.1998 46.7994 19.1998 50.6494 22.7248 52.9994C26.7248 55.6744 33.2748 55.6744 37.2748 52.9994C40.7998 50.6494 40.7998 46.7994 37.2748 44.4494C33.2998 41.7994 26.7248 41.7994 22.7248 44.4494Z"
                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="counter-content">
                                <h2 class="count"><span class="odometer" data-count="148"></span>+</h2>
                                <p>{{ __('main.Expert Teams') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter-area-end -->
        <!-- about-area -->
        <section class="about-area pt-140 pb-120" data-animation="animationContainer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center title-style-two mb-50">
                            <span class="sub-title">{{ __('main.About Company') }}</span>
                            <h2 class="title" data-splitting="chars" data-animation="innerAnimated">
                                {{ __('main.Main Objective') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="about-img-wrap">
                            <img src="{{ asset($About->image) }}" alt="">
                            {{-- <img src="assets/img/images/about_img02.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=1iIZeIy7TqM" class="play-btn popup-video"><i
                                    class="fas fa-play"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content about-list ">
                            {!! $About->text !!}
                            <div class="about-content-bottom mt-3">
                                <a href="{{ route('about') }}" class="btn">{{ __('main.Discover MORE') }}</a>
                                <a href="tel:{{ $Contact->phone1 }}" class="call-btn"><i
                                        class="fas fa-phone-alt"></i>{{ $Contact->phone1 }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->
        <!-- project-area -->
        <section class="project-area-two pb-120" data-animation="animationContainer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title title-style-two text-center mb-60">
                            <span class="sub-title">{{ __('main.OUR PROJECTS') }}</span>
                            <h2 class="title" data-splitting="chars" data-animation="innerAnimated">
                                {{ __('main.Lets Checkout Our') }}
                                <br> {{ __('main.Recently Completed Work') }}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row project-active-two">
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



        <!-- testimonial-area -->
        <section class="testimonial-area-two pt-0" data-animation="animationContainer">
            <div class="testimonial-shape" data-background="{{ asset('website/assets/img/images/map_shape.png') }}">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title title-style-two text-center mb-90">
                            <span class="sub-title">{{ __('main.What Partners Saying') }}</span>
                            <h2 class="title" data-splitting="chars" data-animation="innerAnimated">
                                {{ __('main.Read Client’s Reviews') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="testimonial-item-wrap">
                            <div class="row testimonial-active-two">
                                @foreach ($reviews as $rev)
                                    <div class="col-12">
                                        <div class="testimonial-item-two">
                                            <div class="testimonial-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 26"
                                                    fill="none">
                                                    <path
                                                        d="M27.5004 12.5624H20.2504C18.3379 12.5624 17.0254 11.1124 17.0254 9.33739V5.31235C17.0254 3.53735 18.3379 2.0874 20.2504 2.0874H24.2754C26.0504 2.0874 27.5004 3.53735 27.5004 5.31235V12.5624Z"
                                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M27.4998 12.563C27.4998 20.1255 26.0873 21.3754 21.8373 23.9004"
                                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12.9617 12.5624H5.71169C3.79919 12.5624 2.48669 11.1124 2.48669 9.33739V5.31235C2.48669 3.53735 3.79919 2.0874 5.71169 2.0874H9.74919C11.5242 2.0874 12.9742 3.53735 12.9742 5.31235V12.5624"
                                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12.9618 12.563C12.9618 20.1255 11.5493 21.3754 7.29932 23.9004"
                                                        stroke="currentcolor" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="testimonial-content-two">
                                                <p>{!! $rev->text !!}</p>
                                                <div class="testimonial-avatar">
                                                    <div class="avatar-thumb">
                                                        <img src="{{ asset($rev->image) }}" alt="">
                                                    </div>
                                                    <div class="avatar-content">
                                                        <h6 class="title">{{ $rev->name }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->



        <!-- blog-post-area -->
        <section class="blog-post-area pb-90" data-animation="animationContainer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title title-style-two text-center mb-60">
                            <span class="sub-title">{{ __('main.Recent News') }}</span>
                            <h2 class="title" data-splitting="chars" data-animation="innerAnimated">
                                {{ __('main.Articles And News From Industry') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item-two">
                                <div class="blog-post-thumb">
                                    <a href="{{ Helper::link('blog.details', $blog->id, $blog->title) }}"><img
                                            src="{{ asset($blog->image) }}" alt="image"></a>
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
            </div>
        </section>
        <!-- blog-post-area-end -->

        <!-- brand-area -->
        <div class="brand-area-two">
            <div class="container custom-container">
                <div class="row brand-active">
                    @foreach ($clients as $brand)
                        <div class="col-12">
                            <div class="brand-item-two">
                                <a href="#!"> <img src="{{ asset($brand->image) }}" alt="image"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
@section('js')
    <!-- Add Fancybox CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

    <script>
        // Initialize Fancybox when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            Fancybox.bind("[data-fancybox='portfolio-gallery']", {
                // Customize Fancybox options here
                groupAll: true,
                thumbs: {
                    autoStart: true,
                },
            });
        });
    </script>
@endsection
