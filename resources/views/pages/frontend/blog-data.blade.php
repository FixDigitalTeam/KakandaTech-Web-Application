@extends('layouts.landing-main')
@section('container')
<!-- Start Page Title Area -->
<div class="page-title-area">
   <div class="container">
      <div class="page-title-content">
         <h2>Tech Blogs</h2>
         <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Tech Blogs</li>
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

<!-- Start Blog Area -->
<div class="blog-area ptb-100">
   <div class="container">
      <div class="row justify-content-center">
         @foreach ($data as $getdata)
         <div class="col-lg-4 col-md-6">
            <div class="single-blog-post">
               <div class="image">
                  <a href="{{ route('blogdetail', $getdata->slug) }}" class="d-block">
                     <img src="{{ url('landing-assets/img/blog/blog1.jpg') }}" alt="blog">
                  </a>
                  <a href="{{ route('blogdetail', $getdata->slug) }}" class="tag">Article</a>
               </div>
               <div class="content">
                  <ul class="meta">
                     <li><i class="ri-time-line"></i>{{
                        \Carbon\Carbon::create($getdata->created_at)->toDateString()
                        }}</li>
                     <li><i class="ri-user-line"></i> <a href="{{ route('home') }}">Kakanda Tech</a></li>
                  </ul>
                  <h3><a href="{{ route('blogdetail', $getdata->slug) }}">{{ $getdata->title }}</a></h3>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
<!-- End Blog Area -->
@endsection