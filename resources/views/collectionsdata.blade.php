@extends('layouts.master')
@section('title',"Collection") 
@section('content')
<!--Collection section Start-->
<div class="section learts-mt-40 mb-3">
   <div class="container">
      <!-- <h5 class="feature-heading">
         <span style="color: #eede97;
    font-weight: bold;">PRODUCT CATEGORIES:-
    </span> @foreach($categorys as $cat) {{ strtoupper($cat->category_name) }}, @endforeach</h5> -->
      <div class="row learts-mb-n30">
      @if(!empty($categorys))
      @foreach($categorys as $cat)
         <div class="col-lg-4 col-12 learts-mb-30">
            <div class="sale-banner7">
            <a href="{{ route('collections-cat',$cat->id) }}">
               <div class="inner">
                  <div class="image"><img class="lazyload" data-src="{{ asset('public').'/'.$cat->image }}" alt="Sale Banner Image"></div>
                  <div class="content display-flrx-content">
                     <div>
                        <h2 class="title">
                        {{ $cat->category_name}}
                        </h2>
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
<div class="section learts-mt-40 mb-5">
   <div class="container">
      <h5 class="feature-heading">COLLECTIONS - PRODUCT CATEGORIES WISE - WE SERVE BULK ORDERS</h5>
      <div class="row learts-mb-n30 collection-box">
         <div class="col-xl-4 col-lg-4 col-12 learts-mb-10 mt-2 mb-2">
            <div class="single-widget learts-mb-40">
               <div class="box-details-page">
                  <h4 class="title sub-title-theme text-center">Bed Sheets</h4>
                  <ul class="list-style-details collection-list mt-3">
                     <li>
                        Poly Cotton
                     </li>
                     <li>
                        Glace Cotton
                     </li>
                     <li>
                        100% Cotton Bed Sheets
                     </li>
                     <li>
                        Velvet Digital Bed Sheets
                     </li>
                     <li>
                        Velvety Bed Sheets
                     </li>
                     <li>
                        Kids Bed Sheets
                     </li>
                     <li>
                        3D Bed Sheets
                     </li>
                     <li>
                        White Bed Sheets (For hospital, hotels etc..)
                     </li>
                     <li>
                        Bookfold Bed Sheets
                     </li>
                     <li>
                        King Size Bed Sheets(108x108)
                     </li>
                  </ul>
                  <div class="text-center">
                     <a href="#" class="link">FIND OUT MORE <i class="fas fa-caret-right m-lg-2"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-12 learts-mb-10 mt-2 mb-2">
            <div class="single-widget learts-mb-40">
               <div class="box-details-page">
                  <h4 class="title sub-title-theme text-center">Comforters & Blankets</h4>
                  <ul class="list-style-details collection-list mt-3">
                     <li>
                        Indian Mink
                     </li>
                     <li>
                        Indian Mink (4 pcs set) (Bedsheet | Pillow Covers | Blanket)
                     </li>
                     <li>
                        Imported Mink
                     </li>
                     <li>
                        Imported Mink(4 pcs set) (Bedsheet | Pillow Covers | Blanket)
                     </li>
                     <li>
                        Polar Blanket
                     </li>
                     <li>
                        AC blankets (All quality)
                     </li>
                     <li>
                        AC blankets (1+2)set
                     </li>
                     <li>
                        Mink Flanno
                     </li>
                     <li>
                        Mink Flanno (1+2)set
                     </li>
                     <li>
                        Quilts
                     </li>
                     <li>
                        Baby Blankets
                     </li>
                     <li>
                        Comforter Sets
                     </li>
                  </ul>
                  <div class="text-center">
                     <a href="#" class="link">FIND OUT MORE <i class="fas fa-caret-right m-lg-2"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-12 learts-mb-10 mt-2 mb-2">
            <div class="single-widget learts-mb-40">
               <div class="box-details-page">
                  <h4 class="title sub-title-theme text-center">Cushions & Pillows | Covers</h4>
                  <ul class="list-style-details collection-list mt-3">
                     <li>
                        Cotton Sofa Covers
                     </li>
                     <li>
                        Cotton Cushion covers
                     </li>
                     <li>
                        Digital Cushion covers
                     </li>
                     <li>
                        Velvet Cushion covers
                     </li>
                     <li>
                        Pillow Fillers
                     </li>
                     <li>
                        Survical Pillows
                     </li>
                     <li>
                        Doctor Recommended Pillows
                     </li>
                     <li>
                        Cushion Fillers
                     </li>
                     <li>
                        Fur Cushion Set
                     </li>
                  </ul>
                  <div class="text-center">
                     <a href="#" class="link">FIND OUT MORE <i class="fas fa-caret-right m-lg-2"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-12 learts-mb-10 mt-2 mb-2">
            <div class="single-widget learts-mb-40">
               <div class="box-details-page">
                  <h4 class="title sub-title-theme text-center">Towels</h4>
                  <ul class="list-style-details collection-list mt-3">
                     <li>
                        Hand Towel
                     </li>
                     <li>
                        Face Towel
                     </li>
                     <li>
                        Bath Towel
                     </li>
                     <li>
                        Beach Towel
                     </li>
                  </ul>
                  <p class="mt-2"><strong>Available in solid colors as well as printed</strong></p>
                  <div class="text-center">
                     <a href="#" class="link">FIND OUT MORE <i class="fas fa-caret-right m-lg-2"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-12 learts-mb-10 mt-2 mb-2">
            <div class="single-widget learts-mb-40">
               <div class="box-details-page">
                  <h4 class="title sub-title-theme text-center">Rugs (Mats) & Carpets</h4>
                  <ul class="list-style-details collection-list mt-3">
                     <li>
                        3D Mats
                     </li>
                     <li>
                        Jute Mats
                     </li>
                     <li>
                        Welcome Mats
                     </li>
                     <li>
                        Runners
                     </li>
                     <li>
                        Yoga Mats
                     </li>
                     <li>
                        Rugs
                     </li>
                     <li>
                        Carpet Size (5x7)
                     </li>
                     <li>
                        Carpet Size (6x9)
                     </li>
                     <li>
                        Carpet Size (9x12)
                     </li>
                     <li>
                        Carpet Size (10x12)
                     </li>
                     <li>
                        Carpet Size (12x15)
                     </li>
                  </ul>
                  <p class="mt-2"><strong>Tent carpet also available size (5x15)</strong></p>
                  <div class="text-center">
                     <a href="#" class="link">FIND OUT MORE <i class="fas fa-caret-right m-lg-2"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-12 learts-mb-10 mt-2 mb-2">
            <div class="single-widget learts-mb-40">
               <div class="box-details-page">
                  <h4 class="title sub-title-theme text-center">Bedding Sets</h4>
                  <ul class="list-style-details collection-list mt-3">
                     <li>
                        Diwan Combo Set
                     </li>
                     <li>
                        Bridal Gift Combo Set
                     </li>
                     <li>
                        3D Combo Set
                     </li>
                     <li>
                        Velvet Combo Set
                     </li>
                     <li>
                        Bedsheet Lump Roll
                     </li>
                     <li>
                        Dohar Single/Double
                     </li>
                     <li>
                        Bedding Set
                     </li>
                     <li>
                        Comforter sets
                     </li>
                  </ul>
                  <div class="text-center">
                     <a href="#" class="link">FIND OUT MORE <i class="fas fa-caret-right m-lg-2"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Collection section End-->

@endsection