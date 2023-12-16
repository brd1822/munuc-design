@extends('layouts.master')
@section('title',"All Product") 
@section('content')
<div class="section learts-mt-40 mb-3">
   <div class="container">
      <h5 class="feature-heading">PRODUCT CATEGORIES - {{$categorys ??''}}</h5>
      <div class="row learts-mb-n30">
      @if(!empty($productImages))
      @foreach($productImages as $prodImages)
         <div class="col-lg-4 col-12 learts-mb-30">
            <div class="sale-banner7">
               <div class="inner">
               <a class="btn-gallery image-gallery" href="{{ asset('public').'/'.$prodImages->product_images }}">
                  <div class="image">
                     <img src="{{ asset('public').'/'.$prodImages->product_images }}" alt="Sale Banner Image" class="btn-gallery">
                  </div>
                  </a>
                  <!-- <div class="content display-flrx-content">
                     <div>
                        <h2 class="title">
                        {{$prodImages->product_id}}
                        </h2>
                     </div>
                  </div> -->
               </div>
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
@endsection