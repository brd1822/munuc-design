@extends('layouts.master')
@section('title',"Blog Details") 
@section('content')
<!--Shop details section Start-->
<div class="section section-padding blog-page-details pt-4 pb-5">
   <div class="container">
      <div class="row learts-mb-n50 mb-3">
         <div class="col-md-12 image mb-2">
            <h2 class="title title-same-theme text-left mt-3">Insights Corner | Blog Hub</h2>
         </div>
         <div class="col-md-12 mb-3">
            <p class=" text-left">
               Welcome to our Blog Hub ! Explore a diverse range of topics, from tech to travel, health to entertainment.
               Informative, engaging, and inspiring content awaits! - Insights Corner by Dhanya Wholesale Mart
            </p>
         </div>
      </div>
      <div class="row learts-mb-n40 mt-3">
         <div class="col-md-7 col-12 learts-mb-40">
            <div class="blog">
               <div class="content">
                  <h5 class="title">
                     <a href="javascript:void();">The Science of Sleep: How Bedding Impacts Your Rest & Well-being</a>
                  </h5>
                  <ul class="meta text-left">
                     <li>24 May 2023</li>
                     <li>|</li>
                     <li>Bedding & Linen</li>
                  </ul>
                  <div class="image">
                     <a href="javascript:void();">
                     <img src="{{ asset('assets-front/munucdesigns_img/blog/b1.png') }}" alt="Blog Image">
                     </a>
                  </div>
                  <div class="desc">
                     <p>
                        Sleep plays a vital role in our overall health and well-being. While factors like stress and lifestyle choices can influence the quality of our sleep, one often overlooked aspect is the bedding we sleep on. In this blog, we delve into the science of sleep and explore how bedding impacts our rest and overall well-being. From the choice of fabrics to the importance of comfort and temperature regulation, we uncover the secrets to optimizing your sleep environment for a rejuvenating and restorative slumber.
                     </p>
                     <p>
                        <b>The Role of Bedding in Sleep Quality : </b> <br />
                        Quality bedding is not just about aesthetics; it directly impacts our sleep quality. The materials, textures, and construction of our bedding can significantly influence our comfort levels, body temperature regulation, and even our mood. Understanding the science behind bedding choices can help us create an optimal sleep environment.
                     </p>
                     <p>
                        <b>Fabrics for Optimal Comfort : </b> <br />
                        The choice of fabrics can make a remarkable difference in sleep quality. Natural fibers like cotton and linen offer breathability, moisture-wicking properties, and a soft feel against the skin. These qualities promote air circulation, preventing overheating and excessive sweating during the night. Synthetic materials like microfiber can provide durability and hypoallergenic benefits. It's important to consider individual preferences and any specific allergies or sensitivities when selecting bedding fabrics.
                     </p>
                  </div>
                  <p class="d-flex">
                     <span>Share : &nbsp; </span>
                     <span class="product-share">
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     </span>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-5 col-12 learts-mb-10">
            <!-- Search Start -->
            <div class="single-widget learts-mb-40">
               <h4 class="title mt-3">
                  Sign up for blog updates!                           
               </h4>
               <p>
                  Join my email list to receive updates and information.
               </p>
               <div class="widget-search">
                  <form action="#">
                     <input type="email" placeholder="Enter Email-Id">
                     <a href="#" class="btn btn-warning btn-hover-warning mt-3">Sign Up</a>
                  </form>
               </div>
            </div>
            <!-- Search End -->
            <!-- Blog Post Widget Start -->
            <div class="single-widget learts-mb-40">
               <h3 class="widget-title product-filter-widget-title">Recent Post</h3>
               <ul class="widget-blogs">
                  <li class="widget-blog">
                     <div class="thumbnail">
                        <a href="blog_details.html">
                        <img src="{{ asset('assets-front/munucdesigns_img/blog/b1.png') }}" alt="Widget Blog Post">
                        </a>
                     </div>
                     <div class="content">
                        <h6 class="title">
                           <a href="blog_details.html">Start a Kickass Online Blog</a>
                        </h6>
                        <span class="date">January 22, 2020</span>
                     </div>
                  </li>
                  <li class="widget-blog">
                     <div class="thumbnail">
                        <a href="blog_details.html">
                        <img src="{{ asset('assets-front/munucdesigns_img/blog/b2.png') }}" alt="Widget Blog Post">
                        </a>
                     </div>
                     <div class="content">
                        <h6 class="title">
                           <a href="blog_details.html">Tile Tray with Brass Handles</a>
                        </h6>
                        <span class="date">January 22, 2020</span>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- Blog Post Widget End -->
         </div>
      </div>
   </div>
</div>
@endsection