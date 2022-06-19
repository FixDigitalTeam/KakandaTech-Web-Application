<!DOCTYPE html>
<html lang="zxx">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Link of CSS files -->
   <link rel="stylesheet" href="{{ url('landing-assets/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ url('landing-assets/css/aos.css') }}">
   <link rel="stylesheet" href="{{ url('landing-assets/css/all.min.css') }}">
   <link rel="stylesheet" href="{{ url('landing-assets/css/odometer.min.css') }}">
   <link rel="stylesheet" href="{{ url('landing-assets/css/remixicon.css') }}">
   <link rel="stylesheet" href="{{ url('landing-assets/css/magnific-popup.min.css') }}">
   <link rel="stylesheet" href="{{ url('landing-assets/css/meanmenu.min.css') }}">
   <link rel="stylesheet" href="{{ url('landing-assets/css/swiper-bundle.min.css') }}">
   <link rel="stylesheet" href="{{ url('landing-assets/css/owl.carousel.min.css') }}">
   <link rel="stylesheet" href="{{ url('landing-assets/css/owl.carousel.min.css') }}">
   <link rel="stylesheet" href="{{ url('landing-assets/css/style.css') }}">
   <title>{{ $pagetitle }}</title>
   <link rel="icon" type="image/png" href="{{ url('landing-assets/img/favicon.png') }}">
</head>

<body>
   <!-- Start Navbar Area -->
   <div class="navbar-area">
      <div class="pakap-responsive-nav">
         <div class="container">
            <div class="pakap-responsive-menu">
               <div class="logo">
                  <a href="index-2"><img src="{{ url('landing-assets/img/logo.png') }}" alt="logo"></a>
               </div>
            </div>
         </div>
      </div>
      <div class="pakap-nav">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="{{ route('home') }}">
                  <img src="{{ url('landing-assets/img/logo.png') }}" alt="logo">
               </a>
               <div class="collapse navbar-collapse mean-menu">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link active">Home</a>
                     </li>
                     <li class="nav-item">
                        <a href="{{ route('seocontent') }}" class="nav-link active">SEO Content</a>
                     </li>
                     <li class="nav-item"><a href="#" class="dropdown-toggle nav-link">Development</a>
                        <ul class="dropdown-menu">
                           <li class="nav-item"><a href="{{ route('webdevelopment') }}" class="nav-link">Website</a>
                           </li>
                           <li class="nav-item"><a href="{{ route('mobiledevelopment') }}" class="nav-link">Mobile
                                 App</a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                     </li>
                     <li class="nav-item"><a href="{{ route('contactus') }}" class="nav-link">Contact</a></li>
                  </ul>
                  <div class="others-option">
                     @auth
                     <a href="{{ route('dashboard.index') }}" class="default-btn">Dashboard</a>
                     @endauth
                     @guest
                     <a href="{{ route('login') }}" class="default-btn">Login</a>
                     @endguest
                  </div>
               </div>
            </nav>
         </div>
      </div>
   </div>
   <!-- End Navbar Area -->

   @yield('container')

   <!-- Start Footer Area -->
   <div class="footer-area">
      <div class="container">
         <div class="footer-content">
            <a href="#" class="logo">
               <img src="{{ url('landing-assets/img/logo.png') }}" alt="logo">
            </a>
            <ul class="social-links">
               <li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
               <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
               <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
               <li><a href="#" target="_blank"><i class="ri-messenger-fill"></i></a></li>
               <li><a href="#" target="_blank"><i class="ri-github-fill"></i></a></li>
            </ul>
            <ul class="navbar-nav">
               <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
               <li class="nav-item"><a href="#" class="nav-link">Support</a></li>
               <li class="nav-item"><a href="#" class="nav-link">About</a></li>
               <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
            <p class="copyright">Copyright @<script>
                  document.write(new Date().getFullYear())
               </script> <strong>Kakanda Tech IT Team</strong>. All Rights Reserved</p>
         </div>
      </div>
   </div>
   <!-- End Footer Area -->
   
   <!-- Link of JS files -->
   <script src="{{ url('landing-assets/js/jquery.min.js') }}"></script>
   <script src="{{ url('landing-assets/js/bootstrap.bundle.min.js') }}"></script>
   {{-- <script src="{{ url('landing-assets/alerts/sweetalert2.all.min.js') }}"></script> --}}
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="{{ url('landing-assets/js/owl.carousel.min.js') }}"></script>
   <script src="{{ url('landing-assets/js/swiper-bundle.min.js') }}"></script>
   <script src="{{ url('landing-assets/js/magnific-popup.min.js') }}"></script>
   <script src="{{ url('landing-assets/js/meanmenu.min.js') }}"></script>
   <script src="{{ url('landing-assets/js/appear.min.js') }}"></script>
   <script src="{{ url('landing-assets/js/odometer.min.js') }}"></script>
   <script src="{{ url('landing-assets/js/form-validator.min.js') }}"></script>
   <script src="{{ url('landing-assets/js/contact-form-script.js') }}"></script>
   <script src="{{ url('landing-assets/js/ajaxchimp.min.js') }}"></script>
   <script src="{{ url('landing-assets/js/aos.js') }}"></script>
   <script src="{{ url('landing-assets/js/main.js') }}"></script>
   <!--Start of Tawk.to Script-->
   <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart = new Date();
         (function(){
            var s1 = document.createElement("script");
            var s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/62965535b0d10b6f3e74fa46/1g4djpn61';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
         })
      ();
   </script>
   <!--End of Tawk.to Script-->
</body>

</html>