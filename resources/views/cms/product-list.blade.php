@extends("cms.layout.main")
@section('title',"Product") 
@section('pagetitle',"Product") 
@section('pageSubtitle',"Product List") 
@section('button','+ Add Product') 
@section('buttonURL',"product-add") 

@section('content')
<div class="card">
   <div class="card-body">
      <div class="table-top">
         <div class="search-set">
            <div class="search-path">
               <a class="btn btn-filter" id="filter_search">
               <img src="assets/img/icons/filter.svg" alt="img">
               <span><img src="assets/img/icons/closes.svg" alt="img"></span>
               </a>
            </div>
            <div class="search-input">
               <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
            </div>
         </div>
         <div class="wordset">
            <ul>
               <li>
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
               </li>
               <li>
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
               </li>
               <li>
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
               </li>
            </ul>
         </div>
      </div>
      <div class="card mb-0" id="filter_inputs">
         <div class="card-body pb-0">
            <div class="row">
               <div class="col-lg-12 col-sm-12">
                  <div class="row">
                     <div class="col-lg col-sm-6 col-12">
                        <div class="form-group">
                           <select class="select">
                              <option>Choose Product</option>
                              <option>Macbook pro</option>
                              <option>Orange</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg col-sm-6 col-12">
                        <div class="form-group">
                           <select class="select">
                              <option>Choose Category</option>
                              <option>Computers</option>
                              <option>Fruits</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg col-sm-6 col-12">
                        <div class="form-group">
                           <select class="select">
                              <option>Choose Sub Category</option>
                              <option>Computer</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg col-sm-6 col-12">
                        <div class="form-group">
                           <select class="select">
                              <option>Brand</option>
                              <option>N/D</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg col-sm-6 col-12 ">
                        <div class="form-group">
                           <select class="select">
                              <option>Price</option>
                              <option>150.00</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-1 col-sm-6 col-12">
                        <div class="form-group">
                           <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="table-responsive">
         <table class="table  datanew">
            <thead>
               <tr>
                  <th>
                     <label class="checkboxs">
                     <input type="checkbox" id="select-all">
                     <span class="checkmarks"></span>
                     </label>
                  </th>
                  <th>Product Name</th>
                  <th>Category </th>
                  <th>Brand</th>
                  <th>price</th>
                  <th>Qty</th>
                  <th>Created By</th>
                  <th>Status</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               @if(!empty($product))
               @foreach($product as $products)
               <tr>
                  <td>
                     <label class="checkboxs">
                     <input type="checkbox">
                     <span class="checkmarks"></span>
                     </label>
                  </td>
                  <td class="productimgname">
                     <a href="javascript:void(0);" class="product-img">
                     <img src="{{ asset('public').'/'.$products->image }}" alt="product">
                     </a>
                     <a href="javascript:void(0);">{{$products->product->product_name}}</a>
                  </td>
                  <td>{{$products->categorys}}</td>
                  <td>N/D</td>
                  <td>{{$products->product->new_price}}</td>
                  <td>{{$products->product->quantity}}</td>
                  <td>Admin</td>
                  <td>@if($products->product->status =='1') Active @else Inactive @endif</td>
                  <td>
                     <a class="me-3" href="#">
                     <img src="assets/img/icons/eye.svg" alt="img">
                     </a>
                     <a class="me-3" href="#">
                     <img src="assets/img/icons/edit.svg" alt="img">
                     </a>
                     <a class="confirm-text" href="javascript:void(0);">
                     <img src="assets/img/icons/delete.svg" alt="img">
                     </a>
                  </td>
               </tr>
               @endforeach
               @endif
            </tbody>
         </table>
      </div>
   </div>
</div>
</div>
@endsection