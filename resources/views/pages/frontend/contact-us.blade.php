@extends('layouts.landing-main')
@section('container')
<!-- Start Page Title Area -->
<div class="page-title-area">
   <div class="container">
      <div class="page-title-content">
         <h2>Contac Us</h2>
         <ul>
            <li><a href="/">Home</a></li>
            <li>Contac Us</li>
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
         <p>Jika Anda mengalami kendala atau menemukan bug saat mengakses website dan aplikasi kami. Segera hubungi kontak kami melalui form atau kontak di bawah ini.</p>
      </div>
      <div class="contact-form">
         <form id="contactForm">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                     <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Eg: Sarah Taylor">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                     <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="hello@sarah.com">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                     <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Enter your phone number">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                     <input type="text" name="msg_subject" class="form-control" id="msg_subject" placeholder="Enter your subject" required data-error="Please enter your subject">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                     <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Enter message..."></textarea>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12">
                  <button type="submit" class="default-btn"><i class='bx bx-paper-plane'></i> Send Message</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
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
                  <h3><a href="tel:(+321) 895-980 008">(+321) 895-980 008</a></h3>
                  <h3><a href="tel:(+321) 895-980 008">(+321) 895-980 008</a></h3>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="single-contact-info-box">
                  <div class="icon">
                     <i class="ri-earth-line"></i>
                  </div>
                  <h3><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#dcb4b9b0b0b39cacbdb7bdacf2bfb3b1"><span class="__cf_email__" data-cfemail="38505d545457784859535948165b5755">[email&#160;protected]</span></a></h3>
                  <h3><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#d6bfb8b0b996a6b7bdb7a6f8b5b9bb"><span class="__cf_email__" data-cfemail="fb92959d94bb8b9a909a8bd5989496">[email&#160;protected]</span></a></h3>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="single-contact-info-box">
                  <div class="icon bg2">
                     <i class="ri-map-pin-line"></i>
                  </div>
                  <h3>121 King St, Melbourne VIC 3000, Australia.</h3>
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