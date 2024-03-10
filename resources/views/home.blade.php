@extends('layouts.master')
@section('title',"Home") 
@section('content')
@push('script')
@endpush
<!-- Slider main container Start -->
<div class="section">
   <div class="container">
     <div class="row">
     <div class="col-md-8 pl-0 pr-0 banner-h-img">
      <div class="home4-slider swiper-container">
            <div class="swiper-wrapper">
               <!-- <div class="home4-slide-item swiper-slide banner-img" data-swiper-autoplay="5000">
                  <div class="home4-slide-image">
                     <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/banner.jpeg') }}" alt="Home 4 Slider Image">
                  </div>              
               </div> -->
               <div class="home4-slide-item swiper-slide banner-img" data-swiper-autoplay="5000">
                  <div class="home4-slide-image">
                     <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/7.jpeg') }}" alt="Home 4 Slider Image">
                  </div>              
               </div>
               <div class="home4-slide-item swiper-slide banner-img" data-swiper-autoplay="5000">
                  <div class="home4-slide-image">
                     <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/8.jpeg') }}" alt="Home 4 Slider Image">
                  </div>             
               </div>
               <div class="home4-slide-item swiper-slide banner-img" data-swiper-autoplay="5000">
                  <div class="home4-slide-image">
                     <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/9.jpeg') }}" alt="Home 4 Slider Image">
                  </div>
               </div>
            </div>
           </div>
           <div class="home4-slider-prev swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="ti-angle-left"></i></div>
            <div class="home4-slider-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="ti-angle-right"></i></div>
        
      </div>
     <div class="col-md-4 pl-0 pr-0">
      <div class="swiper-container">
            <div class="swiper-wrapper">
               <div class="home4-slide-item swiper-slide banner-img">            
                  <div class="home4-slide-content">
                     <div class="content-text-d-flex text-mask-reveal">
                       <div>
                       <span class="category typewriter">Unwind in Luxury: Find Your</span>
                        <span class="category typewriter">Perfect Match among Our</span>
                        <span class="category typewriter">Bed Sheets, Bedding Sets,</span>
                        <span class="category typewriter">Covers, Comforters & Blankets.</span>
                       </div>
                        <h2 class="title">"Versatility Redefined: Discover Home Furnishings that Seamlessly Blend Classic Charm with Modern Appeal." </h2>
                        <!-- <div class="link"><a href="#" class="btn btn-warning btn-outline-hover-warning">LEARN MORE</a></div> -->
                     </div>
                  </div>
               </div>
            
            </div>
            </div>
      </div>
   </div>
     </div>
   </div>
</div>
<!-- Slider main container End -->
<!-- About Section Start -->
<div class="section section-padding">
   <div class="container">
      <div class="row learts-mb-n30">
         <!-- About Us Image Start -->
         <div class="col-md-6 col-12 ms-lg-auto learts-mb-30 wow fadeInUp" data-wow-duration="4s" data-wow-delay=".6s" style="visibility: visible; animation-duration: 4s; animation-delay: 0.6s; animation-name: fadeInUp;" >
            <div class="about-us-image">
               <img class="lazyload" class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/aboutus.jpeg') }}" alt="About Image">
            </div>
         </div>
         <!-- About Us Image End -->
         <!-- About Us Content Start -->
         <div class="col-lg-6 col-md-6 col-12 ms-lg-auto align-self-center learts-mb-0 wow fadeInDown" data-wow-duration="4s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 4s; animation-delay: 0.9s; animation-name: fadeInDown;">
            <div class="about-us m-lg-4">
               <div class="inner">
                  <h6 class="sub-title about-sub-title">Where Inspiration Meets Comfort:</h6>
                  <h6 class="title">Dive into Our Extensive Home Furnishing & Decor Choices.</h6>
                  <p>Welcome to Munuc Designs, where your home finds its perfect match in our extensive range of exquisite furnishings. Explore a curated collection that includes luxurious bed sheets, cozy blankets, stylish mats, plump pillows, sumptuous towels, snug comforters, and much more. Revel in the artistry of elegant shades and captivating patterns, ensuring there's something to complement every style and elevate every space.</p>
               </div>
            </div>
         </div>
         <!-- About Us Content End -->
      </div>
   </div>
</div>
<!-- About Section End -->
<!-- COLLECTION RANGE Section Start -->
<div class="section section-fluid section-padding">
   <div class="container">
      <h5 class="feature-heading">PRODUCTS RANGE</h5>
      <div class="instafeed instafeed-carousel instafeed-carousel1">
         <a class="instafeed-item image-gallery wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 3s; animation-delay: 0.9s; animation-name: fadeInLeft;" href="{{ asset('assets-front/munucdesigns_img/collection/1.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/1.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 3s; animation-delay: 0.9s; animation-name: fadeInLeft;" href="{{ asset('assets-front/munucdesigns_img/collection/2.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/2.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery wow fadeInRight" data-wow-duration="3s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 3s; animation-delay: 0.9s; animation-name: fadeInRight;" href="{{ asset('assets-front/munucdesigns_img/collection/3.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/3.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery wow fadeInRight" data-wow-duration="3s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 3s; animation-delay: 0.9s; animation-name: fadeInRight;" href="{{ asset('assets-front/munucdesigns_img/collection/4.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/4.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery wow fadeInRight" data-wow-duration="3s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 3s; animation-delay: 0.9s; animation-name: fadeInRight;" href="{{ asset('assets-front/munucdesigns_img/collection/5.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/5.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery wow fadeInRight" data-wow-duration="3s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 3s; animation-delay: 0.9s; animation-name: fadeInRight;" href="{{ asset('assets-front/munucdesigns_img/collection/6.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/6.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery wow fadeInRight" data-wow-duration="3s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 3s; animation-delay: 0.9s; animation-name: fadeInRight;" href="{{ asset('assets-front/munucdesigns_img/collection/7.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/7.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery wow fadeInRight" data-wow-duration="3s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 3s; animation-delay: 0.9s; animation-name: fadeInRight;" href="{{ asset('assets-front/munucdesigns_img/collection/8.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/8.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/9.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/9.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/10.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/10.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/11.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/11.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/12.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/12.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/13.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/13.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/14.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/14.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/15.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/15.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/16.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/16.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/17.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/17.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/18.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/18.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/19.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/19.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/20.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/20.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/21.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/21.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/22.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/22.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/23.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/23.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/24.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/24.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/25.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/25.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/26.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/26.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/27.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/27.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/28.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/28.jpeg') }}" alt="instagram image" />
         </a>
         <a class="instafeed-item image-gallery" href="{{ asset('assets-front/munucdesigns_img/collection/29.jpeg') }}">
         <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/collection/29.jpeg') }}" alt="instagram image" />
         </a>
      </div>
   </div>
</div>
<!-- COLLECTION RANGE Section End -->
<!-- Product & Banner Section Start -->
<div class="section learts-mt-40 mb-5">
   <div class="container">
      <!-- <h5 class="feature-heading">EXPLORE MORE PRODUCTS</h5> -->
      <div class="row learts-mb-n30">
      @if(!empty($categorys))
      @foreach($categorys as $cat)
         <div class="col-lg-3 col-12 learts-mb-30 wow fadeInUp" data-wow-duration="5s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 5s; animation-delay: 0.9s; animation-name: fadeInUp;">
            <div class="sale-banner7">
            <a href="{{ route('collections-cat',$cat->id) }}">
               <div class="inner">
                  <div class="image"><img class="lazyload" data-src="{{ asset('public').'/'.$cat->image }}" alt="Sale Banner Image"></div>
                  <div class="content display-flrx-content">
                     <div>
                        <h2 class="title">{{$cat->category_name}}</h2>
                     </div>
                  </div>
               </div>
            </div>
            </a>
         </div>
      @endforeach
      @endif
      </div>
   </div>
</div>
<!-- Product & Banner Section End -->
<!-- <div class="section subscribe-bg section-padding pt-0">
   <div class="container">
      <div class="row learts-mb-n30">
         <div class="col learts-mb-30">
            <div class="sale-banner8">
               <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/bg-img.png') }}" alt="Sale Banner Image">
               <div class="content">
                  <h2 class="title text-uppercase">Subscribe</h2>
                  <p class="text-white">Get 5% off your first purchase when you sign up for our newsletter!</p>
                  <div class="newlwtter-form">
                     <form id="mc-form" class="mc-form widget-subscibe2" novalidate="true">
                        <input id="mc-email" autocomplete="off" type="email" placeholder="Email" name="EMAIL">
                        <a href="#" class="btn btn-warning btn-hover-warning">Sign Up</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> -->

<div class="section testimonial-bg-img section-padding">
   <div class="container">
      @include('reviews-list')
   </div>
</div>
<div class="section online-bg-img section-padding">
   <div class="container">
      <div class="row learts-mb-n30">
         <div class="col-md-12 mb-1">
            <h2 class="title text-uppercase">Blogs</h2>
         </div>
         <!-- <div class="col-md-12 mb-4 text-center blog-a">
            <a href="javascript:void();" class="active">
            <b>All Posts </b>
            </a>
            <a href="javascript:void();">
            Bedding & Linen
            </a>
            <a href="javascript:void();">
            Home Furnishing
            </a> 
         </div> -->
         <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 learts-mb-n40 mb-2 animate__animated animate__backInRight animate__delay-8s">
            <div class="col learts-mb-40 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 5s; animation-delay: 0.8s; animation-name: fadeInLeft;">
               <div class="blog">
                  <div class="image">
                     <a href="javascript:void();">
                     <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/blog/b1.png') }}" alt="Blog Image">
                     </a>
                  </div>
                  <div class="content">
                     <ul class="meta">
                        <li><i class="far fa-calendar"></i><a href="#">24 May 2023</a></li>
                     </ul>
                     <h5 class="title"><a href="javascript:void();">The Science of Sleep: How Bedding Impacts</a></h5>
                     <div class="col-md-12 text-center mt-0">
                        <a href="#" class="link">Read Full Review </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col learts-mb-40 wow fadeInUp" data-wow-duration="5s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 5s; animation-delay: 0.8s; animation-name: fadeInUp;">
               <div class="blog">
                  <div class="image">
                     <a href="javascript:void();">
                     <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/blog/b2.png') }}" alt="Blog Image">
                     </a>
                  </div>
                  <div class="content">
                     <ul class="meta">
                        <li><i class="far fa-calendar"></i><a href="#">11 May 2023</a></li>
                     </ul>
                     <h5 class="title"><a href="javascript:void();">Sleep Soundly: Bedding Sets & Covers for a</a></h5>
                     <div class="col-md-12 text-center mt-0">
                        <a href="#" class="link">Read Full Review </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col learts-mb-40 wow fadeInDown" data-wow-duration="5s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 5s; animation-delay: 0.8s; animation-name: fadeInDown;">
               <div class="blog">
                  <div class="image">
                     <a href="javascript:void();">
                     <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/blog/b3.png') }}" alt="Blog Image">
                     </a>
                  </div>
                  <div class="content">
                     <ul class="meta">
                        <li><i class="far fa-calendar"></i><a href="#">29 April 2023</a></li>
                     </ul>
                     <h5 class="title"><a href="javascript:void();">5 Tips for Choosing the Perfect Bedding & Linen</a></h5>
                     <div class="col-md-12 text-center mt-0">
                        <a href="#" class="link">Read Full Review </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col learts-mb-40 wow fadeInRight" data-wow-duration="5s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 5s; animation-delay: 0.8s; animation-name: fadeInRight;">
               <div class="blog">
                  <div class="image">
                     <a href="javascript:void();">
                     <img class="lazyload" data-src="{{ asset('assets-front/munucdesigns_img/blog/b4.png') }}" alt="Blog Image">
                     </a>
                  </div>
                  <div class="content">
                     <ul class="meta">
                        <li><i class="far fa-calendar"></i><a href="#">29 April 2023</a></li>
                     </ul>
                     <h5 class="title"><a href="javascript:void();">Home Furnishing: A Necessity in Today's World</a></h5>
                     <div class="col-md-12 text-center mt-0">
                        <a href="#" class="link">Read Full Review </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection