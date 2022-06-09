@extends('layouts.landing-main')
@section('container')
<!-- Start Page Title Area -->
<div class="page-title-area">
   <div class="container">
      <div class="page-title-content">
         <h2>Contact Us</h2>
         <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Contact Us</li>
         </ul>
      </div>
   </div>
   <div class="divider"></div>
   <div class="lines">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
   </div>
   <div class="banner-shape1"><img src="{{ url('landing-assets/img/shape/shape9.png') }}" alt="image"></div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<div class="contact-area ptb-100">
   <div class="container">
      <div class="section-title">
         <h2>Hubungi Kami</h2>
         <p>Jika Anda mengalami kendala atau menemukan bug saat mengakses website dan aplikasi kami. Segera hubungi
            kontak kami melalui form atau kontak di bawah ini.</p>
      </div>
      <div class="contact-form">
         <form action="{{ route('sendmessage') }}" method="post" autocomplete="off">
            @csrf
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                     <input type="text" name="name" class="form-control" id="name" required
                        data-error="Mohon lengkapi nama Anda" placeholder="Nama Lengkap">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                     <input type="email" name="email" class="form-control" id="email" required
                        data-error="Mohon lengkapi alamat email Anda" placeholder="Email">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                     <input type="text" name="msg_subject" class="form-control" id="msg_subject" placeholder="Subjek"
                        required data-error="Mohon isi subjek keterangan Anda">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                     <textarea name="message" id="message" class="form-control" cols="30" rows="6" required
                        data-error="Mohon isi pesan kebutuhan,keluhan, atau saran Anda"
                        placeholder="Masukkan pesanmu di sini"></textarea>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12">
                  <button type="submit" class="default-btn">
                     <i class='bx bx-paper-plane'></i> Send Message
                  </button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- End Contact Area -->

<!-- Start Contact Info Area -->
<div class="contact-info-area pb-100">
   <div class="container">
      <div class="contact-info-inner">
         <h2>Butuh bantuan cepat? Silahkan hubungi kontak kami di bawah ini!</h2>
         <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="single-contact-info-box">
                  <div class="icon bg1">
                     <i class="ri-customer-service-2-line"></i>
                  </div>
                  <h3><a href="#">+62 82982123732</a></h3>
                  <h3><a href="#">+62 82187298149</a></h3>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="single-contact-info-box">
                  <div class="icon">
                     <i class="ri-earth-line"></i>
                  </div>
                  <h3><a href="#"><span class="__cf_email__">kakandasupport@gmail.com</span></a></h3>
                  <h3><a href="#"><span class="__cf_email__">business@kakandatech.com</span></a></h3>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="single-contact-info-box">
                  <div class="icon bg2">
                     <i class="ri-map-pin-line"></i>
                  </div>
                  <h3>Nangkaan, Kec. Bondowoso, Kabupaten Bondowoso.</h3>
               </div>
            </div>
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
<!-- End Contact Info Area -->
@endsection