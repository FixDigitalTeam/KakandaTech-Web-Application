@extends('layouts.landing-main')
@section('container')
<!-- Start Main Banner Area -->
<div class="main-banner-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-12">
            <div class="main-banner-content">
               <div class="content">
                  <span class="sub-title">KAKANDA TECH</span>
                  <h1>Digital IT Agency Terbaik <br> di Indonesia</h1>
                  <a href="{{ route('register') }}" class="default-btn">Registrasi Member</a>
               </div>
               <div class="trusted-by">
                  <div class="row align-items-center">
                     <div class="col-lg-2 col-md-12">
                        <span class="title">Trusted by:</span>
                     </div>
                     <div class="col-lg-10 col-md-12">
                        <div class="trusted-by-slides owl-carousel owl-theme">
                           <div class="item">
                              <img src="{{ url('landing-assets/img/partner/partner1.png') }}" alt="partner">
                           </div>
                           <div class="item">
                              <img src="{{ url('landing-assets/img/partner/partner2.png') }}" alt="partner">
                           </div>
                           <div class="item">
                              <img src="{{ url('landing-assets/img/partner/partner3.png') }}" alt="partner">
                           </div>
                           <div class="item">
                              <img src="{{ url('landing-assets/img/partner/partner4.png') }}" alt="partner">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-12">
            <div class="main-banner-image" data-aos="fade-up" data-aos-duration="2000">
               <img src="{{ url('landing-assets/img/banner/banner-kakandatech.png') }}" alt="image">
            </div>
         </div>
      </div>
   </div>
   <div class="shape-overlay"></div>
   <div class="banner-shape1">
      <img src="{{ url('landing-assets/img/shape/shape9.png') }}" alt="image">
   </div>
   <div class="banner-shape2">
      <img src="{{ url('landing-assets/img/shape/shape7.png') }}" alt="image">
   </div>
   <div class="banner-shape3">
      <img src="{{ url('landing-assets/img/shape/shape2.png') }}" alt="image">
   </div>
   <div class="banner-shape4">
      <img src="{{ url('landing-assets/img/shape/shape10.png') }}" alt="image">
   </div>
   <div class="banner-shape5">
      <img src="{{ url('landing-assets/img/shape/shape11.png') }}" alt="image">
   </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Features Area -->
<div class="features-area pt-100 mt-5">
   <div class="container">
      <div class="section-title">
         <span class="sub-title">KEUNGGULAN KAMI</span>
         <h2>Mengapa Harus Menggunakan Digital Agency IT Kakanda Tech?</h2>
      </div>
      <div class="row justify-content-center">
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon">
                  <i class="ri-eye-line"></i>
               </div>
               <h3>Efisien</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing. Mollitia nobis maxime ratione saepe eaque dolorem
                  dolorum.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg2">
                  <i class="ri-stack-line"></i>
               </div>
               <h3>Bertanggung Jawab</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing. Mollitia nobis maxime ratione saepe eaque dolorem
                  dolorum.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg3">
                  <i class="ri-leaf-line"></i>
               </div>
               <h3>Dedikasi Tinggi</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing. Mollitia nobis maxime ratione saepe eaque dolorem
                  dolorum.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg4">
                  <i class="ri-secure-payment-line"></i>
               </div>
               <h3>Harga Terjangkau</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing. Mollitia nobis maxime ratione saepe eaque dolorem
                  dolorum.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg5">
                  <i class="ri-cloud-line"></i>
               </div>
               <h3>Cepat, Tepat, Hemat</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing. Mollitia nobis maxime ratione saepe eaque dolorem
                  dolorum.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
            <div class="single-features-item">
               <div class="icon bg6">
                  <i class="ri-pie-chart-2-line"></i>
               </div>
               <h3>Profesional Team</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing. Mollitia nobis maxime ratione saepe eaque dolorem
                  dolorum.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Features Area -->

<!-- Start App Progress Area -->
<div class="app-progress-area ptb-100">
   <div class="container">
      <div class="section-title">
         <span class="sub-title">Layanan</span>
         <h2>Layanan Digital IT Agency Kami</h2>
      </div>
      <div class="row align-items-center">
         <div class="col-lg-6 col-md-12">
            <div class="app-progress-image text-center">
               <img src="{{ url('landing-assets/img/app/app-img2.png') }}" alt="app-img">
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="app-progress-content">
               <span class="sub-title">CONTENT WRITING</span>
               <h2>Buat Konten Berkualitas dengan Skor SEO Terbaik</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam eveniet sequi vero non atque, libero
                  aut est neque inventore omnis soluta, distinctio ipsum illum accusantium, ratione itaque iste quod.
                  Natus. Lorem ipsum dolor.</p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam eveniet sequi vero non atque, libero
                  aut est neque inventore omnis soluta, distinctio ipsum illum accusantium, ratione itaque iste quod.
                  Natus. Lorem ipsum dolor.</p>
               <a href="{{ route('seocontent') }}" class="default-btn">Detail Product</a>
            </div>
         </div>
      </div>
      <div class="row align-items-center pt-100">
         <div class="col-lg-6 col-md-12">
            <div class="app-progress-content">
               <span class="sub-title">WEB DEVELOPMENT</span>
               <h2>Lebih Modern dengan Sistem Informasi Berbasis Website</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam eveniet sequi vero non atque, libero
                  aut est neque inventore omnis soluta, distinctio ipsum illum accusantium, ratione itaque iste quod.
                  Natus. Lorem ipsum dolor.</p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam eveniet sequi vero non atque, libero
                  aut est neque inventore omnis soluta, distinctio ipsum illum accusantium, ratione itaque iste quod.
                  Natus. Lorem ipsum dolor.</p>
               <a href="{{ route('webdevelopment') }}" class="default-btn">Detail Product</a>
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="app-progress-image text-center">
               <img src="{{ url('landing-assets/img/app/app-img2.png') }}" alt="app-img">
            </div>
         </div>
      </div>
      <div class="row align-items-center pt-100">
         <div class="col-lg-6 col-md-12">
            <div class="app-progress-image text-center">
               <img src="{{ url('landing-assets/img/app/app-img2.png') }}" alt="app-img">
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="app-progress-content">
               <span class="sub-title">MOBILE DEVELOPMENT</span>
               <h2>Buat Langkahmu Lebih Mudah dengan Aplikasi Mobile</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam eveniet sequi vero non atque, libero
                  aut est neque inventore omnis soluta, distinctio ipsum illum accusantium, ratione itaque iste quod.
                  Natus. Lorem ipsum dolor.</p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam eveniet sequi vero non atque, libero
                  aut est neque inventore omnis soluta, distinctio ipsum illum accusantium, ratione itaque iste quod.
                  Natus. Lorem ipsum dolor.</p>
               <a href="{{ route('mobiledevelopment') }}" class="default-btn">Detail Product</a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End App Progress Area -->

<!-- Start App Download Area -->
<div class="app-download-area mt-5">
   <div class="container">
      <div class="section-title">
         <span class="sub-title">DOWNLOAD APP</span>
         <h2>Satu Langkah Praktis dengan Aplikasi Mobile KakandaTECH</h2>
      </div>
      <div class="app-download-inner">
         <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
               <div class="app-download-content">
                  <span class="sub-title">DOWNLOAD K-TECH APP</span>
                  <h2>Pantau Progres Pengerjaan Lebih Mudah dan Praktis</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique laborum consequuntur
                     laboriosam ullam dolore fuga eum quidem alias sequi eveniet nostrum, nisi quaerat magnam eligendi
                     debitis quos.</p>
                  <div class="btn-box">
                     <a href="#" class="playstore-btn" target="_blank">
                        <img src="{{ url('landing-assets/img/play-store.png') }}" alt="image">
                        Get It On
                        <span>Google Play</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-12">
               <div class="app-download-image" data-aos="fade-up">
                  <img src="{{ url('landing-assets/img/app/app-img3.png') }}" alt="app-img">
               </div>
            </div>
         </div>
         <div class="shape5">
            <img src="{{ url('landing-assets/img/shape/shape4.png') }}" alt="shape4">
         </div>
         <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
         </div>
      </div>
   </div>
</div>
<!-- End App Download Area -->

{{-- <!-- Start Screenshots Area -->
<div class="screenshots-area bg-color ptb-100">
   <div class="container">
      <div class="section-title">
         <span class="sub-title">Portofolio</span>
         <h2>Membangun Perangkat Lunak Berkualitas</h2>
      </div>
      <div class="screenshots-slides owl-carousel owl-theme">
         <div class="single-screenshot-item">
            <img src="{{ url('landing-assets/img/screenshots/screenshots1.png') }}" alt="screenshots">
         </div>
         <div class="single-screenshot-item">
            <img src="{{ url('landing-assets/img/screenshots/screenshots2.png') }}" alt="screenshots">
         </div>
         <div class="single-screenshot-item">
            <img src="{{ url('landing-assets/img/screenshots/screenshots3.png') }}" alt="screenshots">
         </div>
         <div class="single-screenshot-item">
            <img src="{{ url('landing-assets/img/screenshots/screenshots4.png') }}" alt="screenshots">
         </div>
         <div class="single-screenshot-item">
            <img src="{{ url('landing-assets/img/screenshots/screenshots5.png') }}" alt="screenshots">
         </div>
         <div class="single-screenshot-item">
            <img src="{{ url('landing-assets/img/screenshots/screenshots4.png') }}" alt="screenshots">
         </div>
      </div>
   </div>
</div>
<!-- End Screenshots Area --> --}}

<!-- Start Feedback Area -->
<div class="feedback-area ptb-100">
   <div class="container">
      <div class="section-title">
         <span class="sub-title">CLIENT REVIEWS</span>
         <h2>Kata Mereka Tentang Kami</h2>
      </div>
      <div class="feedback-slides owl-carousel owl-theme">
         @foreach ($datareview as $datas)
            <div class="single-feedback-box">
               <div class="client-info">
                  <div class="d-flex align-items-center">
                     @if ($datas->nama_product == 'Content Writing')
                        <img src="{{ url('landing-assets/img/user/firstuser.jpg') }}" alt="user">
                     @elseif ($datas->nama_product == 'Website Development')
                        <img src="{{ url('landing-assets/img/user/seconduser.jpg') }}" alt="user">
                     @elseif ($datas->nama_product == 'Mobile Development')
                        <img src="{{ url('landing-assets/img/user/thirduser.jpg') }}" alt="user">
                     @endif
                     <div class="title">
                        <h3>{{ $datas->name }}</h3>
                        <span>{{ $datas->nama_product }}</span>
                     </div>
                  </div>
               </div>
               <p>{{ $datas->review }}</p>
               <div class="rating d-flex align-items-center justify-content-between">
                  <h5>Service Quality</h5>
                  <div>
                     @if ($datas->rate == 1)
                        <i class="ri-star-fill"></i>
                     @elseif ($datas->rate == 2)
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                     @elseif ($datas->rate == 3)
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                     @elseif ($datas->rate == 4)
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                     @elseif ($datas->rate == 5)
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                     @endif
                  </div>
               </div>
            </div>
         @endforeach
      </div>
   </div>
</div>
<!-- End Feedback Area -->
@endsection