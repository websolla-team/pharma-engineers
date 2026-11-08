@extends('website.layouts.master')
@section('title')
    {{ __('main.site') }} | {{ __('main.galleies') }}
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
                            <h2 class="title">{{ __('main.Projects') }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i
                                                class="fas fa-home"></i>{{ __('main.home') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('main.Projects') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- project-area -->
        <section class="inner-project-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($galleries as $gal)
                        <div class="col-lg-4 col-md-6">
                            <div class="project-item-two">
                                <div class="project-thumb-two">
                                    <a href="{{ Helper::link('gallery.details', $gal->id, $gal->title) }}"><img
                                            src="{{ asset($gal->image) }}" alt="image"></a>
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
                {{-- <div class="see-more-btn text-center mt-20">
                    <a href="#" class="btn btn-three">See More</a>
                </div> --}}
            </div>
        </section>
        <!-- project-area-end -->


    </main>
@endsection
@section('js')
    <!-- Add required CSS and JS in your head/footer -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Isotope
            var $grid = $('.isotope-container').isotope({
                itemSelector: '.isotope-item',
                layoutMode: 'fitRows'
            });

            // Filter items on button click
            $('.isotope-filters').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
                $('.isotope-filters button').removeClass('active');
                $(this).addClass('active');
            });

            // Initialize Fancybox with default options
            Fancybox.bind("[data-fancybox]", {
                groupAll: false, // Important: set to false to use individual groups
                thumbs: {
                    autoStart: true
                }
            });

            // Handle custom button click to open Fancybox gallery
            $(document).on('click', '.rs-btn', function(e) {
                e.preventDefault();
                e.stopPropagation();

                // Find the fancybox group this item belongs to
                var $item = $(this).closest('.isotope-item');
                var $fancyboxLink = $item.find('[data-fancybox]');
                var groupName = $fancyboxLink.attr('data-fancybox');

                // Collect all items in this group
                var galleryItems = [];
                var currentIndex = 0;

                $('[data-fancybox="' + groupName + '"]').each(function(index) {
                    galleryItems.push({
                        src: $(this).attr('href'),
                        type: 'image',
                        alt: $(this).find('img').attr('alt') || ''
                    });

                    // Check if this is the clicked item to set currentIndex
                    if ($(this).closest('.isotope-item').is($item)) {
                        currentIndex = index;
                    }
                });

                // Open Fancybox with the gallery
                if (galleryItems.length > 0) {
                    Fancybox.show(galleryItems, {
                        thumbs: {
                            autoStart: true
                        },
                        startIndex: currentIndex
                    });
                }
            });
        });
    </script>
@endsection
