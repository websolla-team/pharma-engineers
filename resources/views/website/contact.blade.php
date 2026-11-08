@extends('website.layouts.master')
@section('title')
    {{ __('main.site') }} | {{ __('main.contact us') }}
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
                            <h2 class="title">{{ __('main.contact us') }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i
                                                class="fas fa-home"></i>{{ __('main.home') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('main.contact us') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact-area pt-120 pb-120">
            <div class="container">
                <div class="contact-info-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="contact-info-item">
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">{{ __('main.PHONE') }}</h4>
                                    <p><a href="tel:{{ $Contact->phone1 }}">{{ $Contact->phone1 }}</a> <br> <a
                                            href="tel:{{ $Contact->phone2 }}">{{ $Contact->phone2 }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact-info-item">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">{{ __('main.Email') }}</h4>
                                    <p><a href="mailto:{{ $Contact->email }}">{{ $Contact->email }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact-info-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">{{ __('main.Address') }}</h4>
                                    <p>{{ $Contact->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <div class="contact-form-wrap">
                            <h2 class="title">{{ __('main.Contact for Services') }}</h2>
                            <form action="{{ route('contact.mail') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="name" placeholder="{{ __('main.Your Name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="email" name="email"
                                                placeholder="{{ __('main.Email address') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="tel" name="phone"
                                                placeholder="{{ __('main.Phone number') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="subject" placeholder="{{ __('main.Subject') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <textarea name="message" placeholder="{{ __('main.Write message') }}"></textarea>
                                </div>
                                <button type="submit" class="btn">{{ __('main.Send a message') }}</button>
                            </form>
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- contact-map -->
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d406880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f131!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd"
                                allowfullscreen loading="lazy"></iframe>
                        </div>
                        <!-- contact-map-end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
@endsection
@section('js')
    {{-- import alert script as cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "{{ session('success') }}",
                icon: 'success',
            });
        </script>
    @endif
@endsection
