@extends("cms.layout.main")

@section('title',"Brand") 
@section('pagetitle',"Brand") 
@section('pageSubtitle',"Manage your Brand") 

@section('button','+ Add Brand') 
@section('buttonURL',"brand-add") 

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
        <div class="card" id="filter_inputs">
        <div class="card-body pb-0">
                <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                        <input type="text" placeholder="Enter Brand Name">
                </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                        <input type="text" placeholder="Enter Brand Description">
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
   <table class="table datanew">
      <thead>
         <tr>
            <th>
               <label class="checkboxs">
               <input type="checkbox" id="select-all">
               <span class="checkmarks"></span>
               </label>
            </th>
            <th>Brand Name</th>
            <th>Brand Description</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
        @foreach($Brand as $Brands)
         <tr>
            <td>
               <label class="checkboxs">
               <input type="checkbox">
               <span class="checkmarks"></span>
               </label>
            </td>
            <td>{{ $Brands->brand_name }}</td>
            <td>Dummy</td>
            <td>
                <a class="me-3" href="{{ route('category-edit',$Brands->id) }}">
                <img src="assets/img/icons/edit.svg" alt="img">
                </a>
                <a class="me-3 confirm-text" href="{{ route('brand-delete',$Brands->id) }}" id="delete">
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