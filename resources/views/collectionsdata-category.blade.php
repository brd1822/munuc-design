@extends('layouts.master')
@section('title',"Collection") 
@section('content')
<!--Collection section Start-->
<div class="section learts-mt-40 mb-3">
   <div class="container">
      <!-- <h5 class="feature-heading">PRODUCT CATEGORIES - {{ $category->category_name }}</h5> -->
      <div class="row learts-mb-n30">
      @if(!empty($Products))
      @foreach($Products as $prodt)
         <div class="col-lg-4 col-12 learts-mb-30 wow fadeInRight" data-wow-duration="3s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 3s; animation-delay: 0.9s; animation-name: fadeInRight;">
            <div class="sale-banner7">
               <a href="{{ route('product-cat',$prodt->product->product_slug) }}">
                  <div class="inner">
                     <div class="image"><img class="lazyload" data-src="{{ asset('public').'/'.$prodt->image }}" alt="Sale Banner Image"></div>
                     <div class="content display-flrx-content">
                        <div>
                           <h2 class="title">
                           {{$prodt->product->product_name}}
                           </h2>
                           <p>{{$prodt->product->description}}
                              <br>({{$prodt->product->size_specification}})
                           </p>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         @endforeach
         @else
         <div class="col-lg-4 col-12 learts-mb-30">
            <div class="sale-banner7">
               <h2 class="title">
                  No Data Available This Category Related!!
               </h2>
            </div>
         </div>
         @endif
      </div>
   </div>
</div>
<!--Collection section End-->
@endsection