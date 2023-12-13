@extends("cms.layout.main")
@section('title',"Product") 
@section('pagetitle',"More Images") 
@section('pageSubtitle',"Product More Images") 
@section('button','Dashboard > More Images') 
@section('content')
   <div class="card">
      <div class="card-body">
      <form action="{{ route('product-images') }}" method="post" enctype="multipart/form-data">
      @csrf
         <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
               <div class="form-group">
                  <label>Product Name <span class="text-danger">*</span></label>
                  <select class="select" name="product_id" value="{{ old('product_id')}}">
                     <option value="0">Choose Category</option>
                     @foreach($product as $products)
                     <option value="{{ $products->id }}">{{ $products->product_name }}</option>
                     @endforeach
                  </select>
                  @error('product_id')
                     <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-lg-6">
               <div class="form-group">
               <h5>Multiple Image (Only Max:5 images At a time)<span class="text-danger">*</span></h5>
               <div class="controls">
                     <input type="file" name="multi_img[]" class="form-control" multiple="" id="multiImg">
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