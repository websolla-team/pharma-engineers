 <!-- footer-area -->
 <footer>
     <div class="footer-area">
         <div class="footer-newsletter-wrap">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-md-4">
                         <div class="footer-logo">
                             <a href="{{ route('home') }}"><img src="{{ asset('website/assets/img/logo/w_logo.png') }}"
                                     alt="img"></a>
                         </div>
                     </div>
                     <div class="col-md-8">
                         <div class="footer-newsletter-form">
                             <form action="{{ route('subscribe') }}" method="post">
                                 @csrf
                                 <div class="form-grp">
                                     <label for="email"><i class="far fa-envelope-open"></i></label>
                                     <input type="email" id="email" name="email"
                                         placeholder="{{ __('main.Enter your email address') }}">
                                 </div>
                                 <button type="submit" class="btn">{{ __('main.Subscribe') }}</button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="footer-top">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-3 col-sm-6">
                         <div class="footer-widget">
                             <h4 class="fw-title">{{ __('main.Get In Touch') }}</h4>
                             <div class="footer-contact">
                                 <ul class="list-wrap">
                                     <li><i class="fas fa-map-marker-alt"></i>{{ $Contact->address }}</li>
                                     <li><i class="far fa-envelope"></i><a
                                             href="mailto:{{ $Contact->email }}">{{ $Contact->email }}</a></li>
                                     <li><i class="fas fa-phone-alt"></i><a href="tel:{{ $Contact->phone1 }}"
                                             dir="ltr">{{ $Contact->phone1 }}</a></li>
                                     <li><i class="far fa-clock"></i>{{ $Contact->time }}</li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                         <div class="footer-widget">
                             <h4 class="fw-title">{{ __('main.our services') }}</h4>
                             <div class="footer-link">
                                 <ul class="list-wrap">
                                     @foreach ($Services->take(5) as $service)
                                         <li><a
                                                 href="{{ Helper::link('service.details', $service->id, $service->title) }}">{{ $service->title }}</a>
                                         </li>
                                     @endforeach
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                         <div class="footer-widget">
                             <h4 class="fw-title">{{ __('main.Useful Link') }}</h4>
                             <div class="footer-link">
                                 <ul class="list-wrap">
                                     <li><a href="{{ route('about') }}">{{ __('main.about us') }}</a></li>
                                     <li><a href="{{ route('blogs') }}">{{ __('main.Our Blogs') }}</a></li>
                                     <li><a href="{{ route('contacts') }}">{{ __('main.contact us') }}</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                         <div class="footer-widget">

                             <img src="{{ asset('website/assets/img/logo/w_logo.png') }}">
                         </div>
                     </div>

                 </div>
             </div>
         </div>
         <div class="footer-bottom">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-md-8">
                         <div class="copyright-text">
                             <p> &copy; 2025 <a href="{{ route('home') }}">Pharma Engineers</a>. All rights reserved.
                                 Designed by
                                 <a href="https://websolla.com/en">Websolla</a>
                             </p>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="footer-social">
                             <ul class="list-wrap">
                                 <li><a href="{{ $Contact->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                 <li><a href="{{ $Contact->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                 <li><a href="{{ $Contact->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                 <li><a href="{{ $Contact->instagram }}"><i class="fab fa-instagram"></i></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- footer-area-end -->
