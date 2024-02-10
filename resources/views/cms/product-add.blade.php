@extends("cms.layout.main")
@section('title',"Product") 
@section('pagetitle',"Product") 
@section('pageSubtitle',"Product Create") 
@section('button','New Product') 
@section('content')
   <div class="card">
      <div class="card-body">
      <form action="{{ route('product-save') }}" method="post" enctype="multipart/form-data">
      @csrf
         <div class="row">
            <div class="col-lg-9 col-sm-6 col-12">
               <div class="form-group">
                  <label>Product Name <span class="text-danger">*</span></label>
                  <input type="text" name="product_name" value="{{ old('product_name')}}" placeholder="Enter The Product Name">
                  @error('product_name')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Category <span class="text-danger">*</span></label>
                  <select class="select" name="category_id" value="{{ old('category_id')}}">
                     <option value="0">Choose Category</option>
                     @foreach($category as $categorys)
                     <option value="{{ $categorys->id }}">{{ $categorys->category_name }}</option>
                     @endforeach
                  </select>
                  @error('category_id')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Sub Category</label>
                  <select class="select" name="subcategory_id">
                     <option value="0" selected="" disabled="">Choose Sub Category</option>
                  </select>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Brand</label>
                  <select class="select" name="brand_id">
                     <option value="0">Choose Brand</option>
                     @foreach($Brand as $Brands)
                     <option value="{{ $Brands->id }}">{{ $Brands->brand_name }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Selling Price (₹)<span class="text-danger">*</span></label>
                  <input type="text" name="old_price" value="{{ old('old_price')}}" placeholder="Enter The Selling Price">
                  @error('old_price')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Discount Price  (₹)<span class="text-danger">*</span></label>
                  <input type="text" name="new_price" value="{{ old('new_price')}}" placeholder="Enter The Discount Price">
                  @error('new_price')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Quantity <span class="text-danger">*</span></label>
                  <input type="text" name="quantity" value="{{ old('quantity')}}" placeholder="Enter The Quantity">
                  @error('quantity')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Tax</label>
                  <select class="select" name="tax">
                     <option value="0">Choose Tax</option>
                     <option value="2">2%</option>
                  </select>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Discount Type</label>
                  <select class="select" name="discountType">
                     <option value="0">Percentage</option>
                     <option value="10">10%</option>
                     <option value="20">20%</option>
                  </select>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label> Status</label>
                  <select class="select">
                     <option value="0">Closed</option>
                     <option value="1">Open</option>
                  </select>
               </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
               <div class="form-group">
                  <label> Washing Instruction</label>
                  <input type="text" name="washing_instruction" value="{{ old('washing_instruction')}}" placeholder="Enter The washing instruction">
                  @error('washing_instruction')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
               <div class="form-group">
                  <label> Size Specification</label>
                  <input type="text" name="size_specification" value="{{ old('size_specification')}}" placeholder="Enter The size specification">
                  @error('size_specification')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Feature Products</label>
                  <input type="radio" name="feature_products" value="{{ old('feature_products')}}" value="1">  Yes |
                  <input type="radio" name="feature_products" value="{{ old('feature_products')}}" value="0" checked/>   No
                  @error('feature_products')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Explore More Products</label>
                  <input type="radio" name="explore_more_products" value="{{ old('explore_more_products')}}" value="1">  Yes |
                  <input type="radio" name="explore_more_products" value="{{ old('explore_more_products')}}" value="0" checked>  No
                  @error('explore_more_products')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                  <label>Description <span class="text-danger">*</span></label>
                  <textarea class="form-control" name="description" value="{{ old('description')}}" placeholder="Enter The Description"></textarea>
                  @error('description')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-6">
               <div class="form-group">
               <h5>Multiple Image (Only Max:5 images At a time)<span class="text-danger">*</span></h5>
               <div class="controls">
                     <input type="file" name="multi_img[]" class="form-control" multiple="" id="multiImg" required="" >
                     @error('multi_img') 
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                     <div class="row" id="preview_img"></div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <input type="submit" class="btn btn-submit me-2" value="Submit">
                  <!-- <button class="btn btn-cancel">Cancel</button> -->
            </div>
         </div>
      </form>
      </div>
   </div>
</div>
@endsection