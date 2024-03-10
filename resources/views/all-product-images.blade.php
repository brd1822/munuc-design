@extends('layouts.master')
@section('title',"All Product")
@section('content')
<div class="section learts-mt-40 mb-3 details-con">
    <div class="container">
        <h5 class="feature-heading">PRODUCT CATEGORIES - {{$categorys ??''}}</h5>
        <div class="row learts-mb-n30">
            @if(!empty($productImages))
            @foreach($productImages as $prodImages)
            <div class="col-lg-4 col-12 learts-mb-30">
                <div class="sale-banner7">
                    <div class="inner wow fadeInUp" data-wow-duration="3s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 3s; animation-delay: 0.9s; animation-name: fadeInUp;">
                        <!-- <a class="btn-gallery image-gallery" href="{{ asset('public').'/'.$prodImages->product_images }}"> -->
                            <div class="image">
                                <img class="lazyload" data-src="{{ asset('public').'/'.$prodImages->product_images }}" alt="Sale Banner Image" class="btn-gallery">
                               <a class="btn-gallery zoom-popup-img image-gallery" href="{{ asset('public').'/'.$prodImages->product_images }}" >
                               <img class="lazyload" data-src="{{ asset('public').'/'.$prodImages->product_images }}" alt="Sale Banner Image" class="btn-gallery d-none">
                                     <svg fill="none" focusable="false" width="20" height="20" class="icon icon--image-zoom" viewBox="0 0 14 14">
                                        <path d="M9.50184 9.50184C11.4777 7.52595 11.5133 4.358 9.58134 2.42602C7.64936 0.494037 4.48141 0.529632 2.50552 2.50552C0.529632 4.48141 0.494037 7.64936 2.42602 9.58134C4.358 11.5133 7.52595 11.4777 9.50184 9.50184ZM9.50184 9.50184L13 13"  stroke="currentColor" stroke-width="2"></path>
                                    </svg>
                                    </a>
                            </div>
                        <!-- </a> -->
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