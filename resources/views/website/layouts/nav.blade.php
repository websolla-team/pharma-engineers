    <!-- Preloader-start -->
    <div id="preloader">
        <div class="ta-preloader-block">
            <div class="ta-spinner-eff">
                <div class="ta-bar ta-bar-top"></div>
                <div class="ta-bar ta-bar-right"></div>
                <div class="ta-bar ta-bar-bottom"></div>
                <div class="ta-bar ta-bar-left"></div>
            </div>
        </div>
    </div>
    <!-- Preloader-start-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header class="header-style-two transparent-header">
        <div id="sticky-header" class="menu-area">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo">
                                    <a href="{{ route('home') }}"><img
                                            src="{{ asset('website/assets/img/logo/w_logo.png') }}" alt="Logo"></a>
                                </div>
                                <div class="logo sticky-logo">
                                    <a href="{{ route('home') }}"><img
                                            src="{{ asset('website/assets/img/logo/logo.png') }}" alt="Logo"></a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="menu-item-has-children"><a
                                                href="{{ route('home') }}">{{ __('main.home') }}</a>

                                        </li>
                                        <li class="menu-item-has-children"><a
                                                href="{{ route('about') }}">{{ __('main.about us') }}</a>

                                        </li>
                                        <li class="menu-item-has-children"><a
                                                href="{{ route('services') }}">{{ __('main.services') }}</a>

                                        </li>
                                        <li class="menu-item-has-children"><a
                                                href="{{ route('gallery') }}">{{ __('main.projects') }}</a>

                                        </li>

                                        <li class="menu-item-has-children"><a
                                                href="{{ route('blogs') }}">{{ __('main.Blogs') }}</a>

                                        </li>
                                        <li class="menu-item-has-children"><a
                                                href="{{ route('contacts') }}">{{ __('main.contact') }}</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul class="list-wrap">
                                        {{-- <li class="header-search"><a href="#"><i class="fas fa-search"></i></a>
                                        </li> --}}
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-outline-secondary dropdown-toggle d-flex align-items-center gap-2"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                {{-- اللغة الحالية --}}
                                                <span class="fw-semibold">
                                                    {{ LaravelLocalization::getCurrentLocaleNative() }}
                                                </span>
                                            </button>

                                            <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between {{ app()->getLocale() == $localeCode ? 'active fw-semibold' : '' }}"
                                                            hreflang="{{ $localeCode }}"
                                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                                            <span>{{ $properties['native'] }}</span>

                                                            {{-- علامة ✓ على اللغة الحالية --}}
                                                            @if (app()->getLocale() == $localeCode)
                                                                <span class="text-success">✔</span>
                                                            @endif
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <li class="header-btn "><a href="{{ route('contacts') }}"
                                                class="btn btn-two">{{ __('main.Get A Quote') }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            </nav>
                        </div>

                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo">
                                    <a href="{{ route('home') }}"><img
                                            src="{{ asset('website/assets/img/logo/logo.png') }}" alt="Logo"></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->

                                </div>
                                <div class="dropdown mt-3">
                                    <button
                                        class="btn btn-outline-secondary dropdown-toggle d-flex align-items-center gap-2"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                        {{-- اللغة الحالية --}}
                                        <span class="fw-semibold">
                                            {{ LaravelLocalization::getCurrentLocaleNative() }}
                                        </span>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between {{ app()->getLocale() == $localeCode ? 'active fw-semibold' : '' }}"
                                                    hreflang="{{ $localeCode }}"
                                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                                    <span>{{ $properties['native'] }}</span>

                                                    {{-- علامة ✓ على اللغة الحالية --}}
                                                    @if (app()->getLocale() == $localeCode)
                                                        <span class="text-success">✔</span>
                                                    @endif
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="social-links">
                                    <ul class="clearfix list-wrap">
                                        <li><a href="{{ $Contact->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="{{ $Contact->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{ $Contact->instagram }}"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li><a href="{{ $Contact->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li><a href="{{ $Contact->youtube }}"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->

                    </div>
                </div>
            </div>
        </div>

        <!-- header-search -->
        <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="search-wrap text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="search-form">
                                <form action="#">
                                    <input type="text" placeholder="Enter your keyword...">
                                    <button class="search-btn"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-backdrop"></div>
        <!-- header-search-end -->

    </header>
    <!-- header-area-end -->
