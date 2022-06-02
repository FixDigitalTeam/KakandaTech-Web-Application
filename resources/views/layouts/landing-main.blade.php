<!DOCTYPE html>
<html lang="zxx">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Link of CSS files -->
   <link rel="stylesheet" href="landing-assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="landing-assets/css/aos.css">
   <link rel="stylesheet" href="landing-assets/css/all.min.css">
   <link rel="stylesheet" href="landing-assets/css/odometer.min.css">
   <link rel="stylesheet" href="landing-assets/css/remixicon.css">
   <link rel="stylesheet" href="landing-assets/css/magnific-popup.min.css">
   <link rel="stylesheet" href="landing-assets/css/meanmenu.min.css">
   <link rel="stylesheet" href="landing-assets/css/swiper-bundle.min.css">
   <link rel="stylesheet" href="landing-assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="landing-assets/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="landing-assets/css/style.css">
   <title>{{ $pagetitle }}</title>
   <link rel="icon" type="image/png" href="landing-assets/img/favicon.png">
</head>
<body>
   <!-- Start Navbar Area -->
   <div class="navbar-area">
      <div class="pakap-responsive-nav">
         <div class="container">
            <div class="pakap-responsive-menu">
               <div class="logo">
                  <a href="index-2"><img src="landing-assets/img/logo.png" alt="logo"></a>
               </div>
            </div>
         </div>
      </div>
      <div class="pakap-nav">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="/">
                  <img src="landing-assets/img/logo.png" alt="logo">
               </a>
               <div class="collapse navbar-collapse mean-menu">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a href="/" class="nav-link active">Home</a>
                     </li>
                     <li class="nav-item">
                        <a href="/seo-content" class="nav-link active">SEO Content</a>
                     </li>
                     <li class="nav-item"><a href="#" class="dropdown-toggle nav-link">Development</a>
                        <ul class="dropdown-menu">
                           <li class="nav-item"><a href="/web-development" class="nav-link">Website</a></li>
                           <li class="nav-item"><a href="/mobile-development" class="nav-link">Mobile App</a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="/blog-data" class="nav-link">Blog</a>
                     </li>
                     <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
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
                  <img src="landing-assets/img/logo.png" alt="logo">
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
               <p class="copyright">Copyright @<script>document.write(new Date().getFullYear())</script> <strong>Kakanda Tech IT Team</strong>. All Rights Reserved</p>
            </div>
      </div>
   </div>
   <!-- End Footer Area -->
   <div class="go-top"><i class="ri-arrow-up-s-line"></i></div>
   <!-- Link of JS files -->
   <script src="landing-assets/js/jquery.min.js"></script>
   <script src="landing-assets/js/bootstrap.bundle.min.js"></script>
   <script src="landing-assets/js/owl.carousel.min.js"></script>
   <script src="landing-assets/js/swiper-bundle.min.js"></script>
   <script src="landing-assets/js/magnific-popup.min.js"></script>
   <script src="landing-assets/js/meanmenu.min.js"></script>
   <script src="landing-assets/js/appear.min.js"></script>
   <script src="landing-assets/js/odometer.min.js"></script>
   <script src="landing-assets/js/form-validator.min.js"></script>
   <script src="landing-assets/js/contact-form-script.js"></script>
   <script src="landing-assets/js/ajaxchimp.min.js"></script>
   <script src="landing-assets/js/aos.js"></script>
   <script src="landing-assets/js/main.js"></script>
</body>
</html>