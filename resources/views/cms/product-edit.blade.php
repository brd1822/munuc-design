@extends("cms.layout.main")
@section('pagetitle',"Product") 
@section('pageSubtitle',"Product Edit") 
@section('button','+ Add Product') 
@section('content')
   <div class="card">
      <div class="card-body">
      <form action="{{ route('product-update') }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
         <div class="row">
            <input type="hidden" name="id" value="{{$product->id}}">
            <div class="col-lg-9 col-sm-6 col-12">
               <div class="form-group">
                  <label>Product Name <span class="text-danger">*</span></label>
                  <input type="text" name="product_name" value="{{ $product->product_name }}" placeholder="Enter The Product Name">
                  @error('product_name')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Category <span class="text-danger">*</span></label>
                  <select class="select" name="category_id" >
                     <option value="0">Choose Category</option>
                     @foreach($category as $categorys)
                     @if($categorys->id == $product->category_id)
                        <option value="{{ $categorys->id }}" selected>{{ $categorys->category_name }}</option>
                     @else
                        <option value="{{ $categorys->id }}">{{ $categorys->category_name }}</option>
                     @endif
                     @endforeach
                  </select>
                  @error('category_id')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <!-- <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Sub Category</label>
                  <select class="select" name="subcategory_id">
                     <option value="0" selected="" disabled="">Choose Sub Category</option>
                  </select>
               </div>
            </div> -->
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Brand</label>
                  <select class="select" name="brand_id">
                     <option value="0">Choose Brand</option>
                     @foreach($Brand as $Brands)
                     @if($Brands->id == $product->brand_id)
                        <option value="{{ $Brands->id }}" selected>{{ $Brands->brand_name }}</option>
                     @else
                        <option value="{{ $Brands->id }}">{{ $Brands->brand_name }}</option>
                     @endif
                     @endforeach
                  </select>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Selling Price (₹)<span class="text-danger">*</span></label>
                  <input type="text" name="old_price" value="{{ $product->old_price }}" placeholder="Enter The Selling Price">
                  @error('old_price')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Discount Price  (₹)<span class="text-danger">*</span></label>
                  <input type="text" name="new_price" value="{{ $product->new_price }}" placeholder="Enter The Discount Price">
                  @error('new_price')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Quantity <span class="text-danger">*</span></label>
                  <input type="text" name="quantity" value="{{ $product->quantity }}" placeholder="Enter The Quantity">
                  @error('quantity')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Tax</label>
                  <select class="select" name="tax">
                     <option value="0" <?php if($product->tax == 0){ echo 'selected'; }else{ ''; } ?>>Choose Tax</option>
                     <option value="2" <?php if($product->tax == 2){ echo 'selected'; }else{ ''; } ?>>2%</option>
                  </select>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Discount Type</label>
                  <select class="select" name="discountType">
                     <option value="0" <?php if($product->discountType == 0){ echo 'selected'; }else{ ''; } ?>>Percentage</option>
                     <option value="10" <?php if($product->discountType == 10){ echo 'selected'; }else{ ''; } ?>>10%</option>
                     <option value="20" <?php if($product->discountType == 20){ echo 'selected'; }else{ ''; } ?>>20%</option>
                  </select>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label> Status</label>
                  <select class="select" name="status">
                     <option value="0" <?php if($product->status == 0){ echo 'selected'; }else{ ''; } ?>>Closed</option>
                     <option value="1" <?php if($product->status == 1){ echo 'selected'; }else{ ''; } ?>>Open</option>
                  </select>
               </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
               <div class="form-group">
                  <label> Washing Instruction</label>
                  <input type="text" name="washing_instruction" value="{{ $product->washing_instruction }}" placeholder="Enter The washing instruction">
                  @error('washing_instruction')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
               <div class="form-group">
                  <label> Size Specification</label>
                  <input type="text" name="size_specification" value="{{ $product->size_specification }}" placeholder="Enter The size specification">
                  @error('size_specification')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Feature Products</label>
                  <input type="radio" name="feature_products" value="{{ $product->feature_products }}" value="1" <?php if($product->feature_products == 1){ echo 'checked'; }else{ echo ''; } ?>>  Yes |
                  <input type="radio" name="feature_products" value="{{ $product->feature_products }}" value="0" <?php if($product->feature_products == 0){ echo 'checked'; }else{ echo ''; } ?>/>   No
                  @error('feature_products')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Explore More Products</label>
                  <input type="radio" name="explore_more_products" value="{{ $product->explore_more_products }}" value="1" <?php if($product->explore_more_products == 1){ echo 'checked'; }else{ echo ''; } ?>>  Yes |
                  <input type="radio" name="explore_more_products" value="{{ $product->explore_more_products }}" value="0" <?php if($product->explore_more_products == 0){ echo 'checked'; }else{ echo ''; } ?>>  No
                  @error('explore_more_products')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                  <label>Description <span class="text-danger">*</span></label>
                  <textarea class="form-control" name="description" value="" placeholder="Enter The Description">{{ $product->description }}</textarea>
                  @error('description')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <!-- <div class="col-lg-6">
               <div class="form-group">
               <h5>Multiple Image (Only Max:5 images At a time)<span class="text-danger">*</span></h5>
               <div class="controls">
                     <input type="file" name="multi_img[]" class="form-control" multiple="" id="multiImg" >
                     @error('multi_img') 
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                     <div class="row" id="preview_img"></div>
                  </div>
               </div>
            </div> -->
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