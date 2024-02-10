@extends("cms.layout.main")
@section('title',"Category") 
@section('pagetitle',"Product") 
@section('pageSubtitle',"Product Category list") 
@section('button','+ Add Category') 
@section('buttonURL',"category-add") 
@section('content')
      <div class="card">
         <div class="card-body">
            <div class="table-top">
               <div class="search-set">
                  <div class="search-path">
                     <!-- <a class="btn btn-filter" id="filter_search">
                     <img src="assets/img/icons/filter.svg" alt="img">
                     <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                     </a> -->
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
            <div class="card" id="filter_inputs">
               <div class="card-body pb-0">
                  <div class="row">
                     <div class="col-lg-2 col-sm-6 col-12">
                        <div class="form-group">
                           <select class="select">
                              <option>Choose Category</option>
                              <option>Computers</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-2 col-sm-6 col-12">
                        <div class="form-group">
                           <select class="select">
                              <option>Choose Sub Category</option>
                              <option>Fruits</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-2 col-sm-6 col-12">
                        <div class="form-group">
                           <select class="select">
                              <option>Choose Sub Brand</option>
                              <option>Iphone</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                        <div class="form-group">
                           <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
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
                        <th>Category name</th>
                        <th>Category Code</th>
                        <th>Description</th>
                        <th>Created By</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                  @foreach($category as $categorys)
                     <tr>
                        <td>
                           <label class="checkboxs">
                           <input type="checkbox">
                           <span class="checkmarks"></span>
                           </label>
                        </td>
                        <td class="productimgname">
                           <!-- <a href="javascript:void(0);" class="product-img">
                           <img src="assets/img/product/noimage.png" alt="product">
                           </a> -->
                           <a href="javascript:void(0);">{{ $categorys->category_name }}</a>
                        </td>
                        <td>{{ $categorys->category_code }}</td>
                        <td>{{ $categorys->category_description }}</td>
                        <td>Admin</td>
                        <td>
                           <a class="me-3" href="{{ route('category-edit',$categorys->id) }}">
                           <img src="assets/img/icons/edit.svg" alt="img">
                           </a>
                           <a class="me-3 confirm-text" href="{{ route('category-delete',$categorys->id) }}" id="delete">
                           <img src="assets/img/icons/delete.svg" alt="img">
                           </a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
@endsection