@extends('layouts.landing-main')
@section('container')
<!-- Start Page Title Area -->
<div class="page-title-area">
   <div class="container">
      <div class="page-title-content">
         <h2>Blog Details</h2>
         <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Blog Details</li>
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

@foreach ($blogdetail as $data)
<!-- Start Blog Details Area -->
<div class="blog-details-area ptb-100">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-12">
            <div class="blog-details-desc">
               <h1 class="mb-4">{{ $data->title }}</h1>
               <div class="article-image">
                  <a href="{{ route('home') }}" class="tag">Kakanda Tech</a>
                  <img src="{{ url('landing-assets/img/blog/blog1.jpg') }}" alt="blog-details">
               </div>
               <div class="article-content">
                  <div class="entry-meta">
                     <ul>
                        <li><i class="ri-calendar-2-line"></i>{{
                           \Carbon\Carbon::create($data->created_at)->toDateString()
                           }}</li>
                        <li><i class="ri-user-2-line"></i><a href="{{ route('home') }}">Kakanda Tech</a></li>
                     </ul>
                  </div>
                  <h1>{{ $data->title }}</h1>
                  {!! $data->content !!}
               </div>
               <div class="article-footer">
                  <div class="post-author-meta">
                     <div class="d-flex align-items-center">
                        <img src="{{ url('landing-assets/img/user/user6.jpg') }}" alt="user">
                        <div class="title">
                           <span class="name">By <a href="{{ route('home') }}">KakandaTech</a></span>
                           <span class="date">{{ \Carbon\Carbon::create($data->created_at)->toFormattedDateString()
                              }}</span>
                        </div>
                     </div>
                  </div>
                  <div class="article-share">
                     <ul class="social">
                        <li><span>Share:</span></li>
                        <li><a href="#" class="facebook" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                        <li><a href="#" class="twitter" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                        <li><a href="#" class="linkedin" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                        <li><a href="#" class="instagram" target="_blank"><i class="ri-instagram-line"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="related-post">
                  <h3 class="title">Related Post</h3>
                  <div class="row justify-content-center">
                     @foreach ($releatedpost as $getpost)
                     <div class="col-lg-6 col-md-6">
                        <div class="single-blog-post">
                           <div class="image">
                              <a href="{{ url('/blog', $getpost->slug) }}" class="d-block">
                                 <img src="{{ url('landing-assets/img/blog/blog1.jpg') }}" alt="blog">
                              </a>
                              <a href="{{ route('home') }}" class="tag">Kakanda Tech</a>
                           </div>
                           <div class="content">
                              <ul class="meta">
                                 <li><i class="ri-time-line"></i> {{
                                    \Carbon\Carbon::create($getpost->created_at)->toDateString()
                                    }}</li>
                                 <li><i class="ri-user-2-line"></i> <a href="{{ route('home') }}"> Kakanda Tech</a></li>
                              </ul>
                              <h3><a href="{{ url('blog', $getpost->slug) }}">{{ $getpost->title }}</a></h3>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-12">
            <aside class="widget-area">
               <div class="widget widget_search">
                  <form class="search-form">
                     <label><input type="search" class="search-field" placeholder="Search..."></label>
                     <button type="submit"><i class="ri-search-2-line"></i></button>
                  </form>
               </div>
               <div class="widget widget_pakap_posts_thumb">
                  <h3 class="widget-title">Popular Posts</h3>
                  @foreach ($popularpost as $item)
                  <article class="item">
                     <a href="{{ url('blog', $getpost->slug) }}" class="thumb"><span class="fullimage cover bg1"
                           role="img"></span></a>
                     <div class="info">
                        <h4 class="title usmall"><a href="{{ url('blog', $getpost->slug) }}">{{ $item->title }}</a></h4>
                        <span class="date"><i class="ri-calendar-2-fill"></i> {{
                           \Carbon\Carbon::create($getpost->created_at)->toDateString()
                           }}</span>
                     </div>
                  </article>
                  @endforeach
               </div>
            </aside>
         </div>
      </div>
   </div>
</div>
<!-- End Blog Details Area -->
@endforeach
@endsection