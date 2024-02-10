<div id="sidebar-menu" class="sidebar-menu">
   <ul>
      <li class="<?php if(request()->segment(count(request()->segments())) =='dashboard') { echo 'active'; }else{ echo ''; }  ?>">
         <a href="{{ route('dashboard') }}"><img src="{{ asset('/') }}assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
      </li>
      <li class="submenu">
         <a href="javascript:void(0);" class="">
        <img src="{{ asset('/') }}assets/img/icons/product.svg" alt="img">
        <span> Product</span> <span class="menu-arrow"></span>
        </a>
         <ul style="<?php if(request()->segment(count(request()->segments())) =='product-add') { echo 'display: block !important;'; }else{ echo 'display:none'; }  ?>">
            <li><a href="{{ route('product-add') }}" class="<?php if(request()->segment(count(request()->segments())) =='product-add') { echo 'active'; }else{ echo ''; }  ?>">Add Product</a></li>
            <li><a href="{{ route('product-list') }}" class="<?php if(request()->segment(count(request()->segments())) =='product-list') { echo 'active'; }else{ echo ''; }  ?>">Product List</a></li>
            <li><a href="{{ route('more-images') }}" class="<?php if(request()->segment(count(request()->segments())) =='more-images') { echo 'active'; }else{ echo ''; }  ?>">Product More Images</a></li>
         </ul>
      </li>
      <li class="submenu">
         <a href="javascript:void(0);" 
         class=""
         >
        <img src="{{ asset('/') }}assets/img/icons/settings.svg" alt="img">
        <span> Category</span> <span class="menu-arrow"></span></a>
         <ul style="<?php if(request()->segment(count(request()->segments())) =='category-add') { echo 'display: block !important;'; }else{ echo 'display:none'; }  ?>">
            <li><a href="{{ route('category-add') }}" class="<?php if(request()->segment(count(request()->segments())) =='category-add') { echo 'active'; }else{ echo ''; }  ?>">Add Category</a></li>
            <li><a href="{{ route('category-list') }}" class="<?php if(request()->segment(count(request()->segments())) =='category-list') { echo 'active'; }else{ echo ''; }  ?>">Category List</a></li>
            <li><a href="{{ route('subcategory-add') }}" class="<?php if(request()->segment(count(request()->segments())) =='subcategory-add') { echo 'active'; }else{ echo ''; }  ?>">Add Sub Category</a></li>
            <li><a href="{{ route('subcategory-list') }}" class="<?php if(request()->segment(count(request()->segments())) =='subcategory-list') { echo 'active'; }else{ echo ''; }  ?>">Sub Category List</a></li>
         </ul>
      </li>
      <li class="submenu">
         <a href="javascript:void(0);" class="<?php if(request()->segment(count(request()->segments())) =='brand-add' || request()->segment(count(request()->segments())) =='brand-list') { echo 'active subdrop'; }else{ echo ''; }  ?>">
        <img src="{{ asset('/') }}assets/img/icons/settings.svg" alt="img"><span> Brand</span> <span class="menu-arrow"></span></a>
         <ul>
            <li><a href="{{ route('brand-list') }}">Brand List</a></li>
            <li><a href="{{ route('brand-add') }}">Add Brand</a></li>
         </ul>
      </li>
   </ul>
</div>