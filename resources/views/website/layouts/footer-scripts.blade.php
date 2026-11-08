 <!-- Back to Top -->

 <script src="{{ asset('website/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
 <script src="{{ asset('website/assets/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('website/assets/js/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('website/assets/js/imagesloaded.pkgd.min.js') }}"></script>
 <script src="{{ asset('website/assets/js/jquery.magnific-popup.min.js') }}"></script>
 <script src="{{ asset('website/assets/js/jquery.odometer.min.js') }}"></script>
 <script src="{{ asset('website/assets/js/jquery.appear.js') }}"></script>
 <script src="{{ asset('website/assets/js/swiper-bundle.min.js') }}"></script>
 <script src="{{ asset('website/assets/js/slick.min.js') }}"></script>
 <script src="{{ asset('website/assets/js/slick-animation.min.js') }}"></script>
 <script src="{{ asset('website/assets/js/splitting.js') }}"></script>
 <script src="{{ asset('website/assets/js/animation.js') }}"></script>
 <script src="{{ asset('website/assets/js/ajax-form.js') }}"></script>
 <script src="{{ asset('website/assets/js/tg-cursor.min.js') }}"></script>
 <script src="{{ asset('website/assets/js/wow.min.js') }}"></script>
 <script src="{{ asset('website/assets/js/main.js') }}"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script>
     function handleSignup(event) {
         event.preventDefault(); // prevent page reload

         const email = document.getElementById('emailInput').value.trim();
         const messageBox = document.getElementById('successMessage');

         if (email !== '') {
             messageBox.classList.remove('d-none');
             messageBox.classList.remove('alert-danger');
             messageBox.classList.add('alert-success');
             messageBox.textContent = '✅ Signup successful!';
         } else {
             messageBox.classList.remove('d-none');
             messageBox.classList.remove('alert-success');
             messageBox.classList.add('alert-danger');
             messageBox.textContent = '⚠️ Please enter a valid email.';
         }
     }
 </script>
 @if (session('success'))
     <script>
         Swal.fire({
             title: "Good job!",
             text: "{{ session('success') }}",
             icon: 'success',
         });
     </script>
 @endif
 <script>
     const mobileToggler = document.querySelector('.mobile-nav-toggler');
     const scroleColor = '#000';
     const defaultColor = mobileToggler.style.color || '#fff';
     window.addEventListener('scroll', () => {
         if (window.scrollY > 50) {
             mobileToggler.style.color = scroleColor;
         } else {
             mobileToggler.style.color = defaultColor;
         }
     });
 </script>
 @yield('js')
