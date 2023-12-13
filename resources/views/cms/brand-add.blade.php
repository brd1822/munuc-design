@extends("cms.layout.main")

@section('title',"Brand") 
@section('pagetitle',"Brand") 
@section('pageSubtitle',"Create new Brand") 
@section('pageSubtitle',"Brand Create") 
@section('button','Dashboard > New Brand') 
@section('content')
<div class="card">
   <div class="card-body">
   <form action="{{ route('brand-save') }}" method="post">
         @csrf
      <div class="row">
         <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
               <label>Brand Name<span style="color:red;">*</span></label>
               <input type="text" name="brand_name">
               @error('brand_name')
                   <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
         </div>
         <div class="col-lg-8 col-sm-6 col-12">
            <div class="form-group">
               <label>Description</label>
               <textarea class="form-control"></textarea>
            </div>
         </div>
         <!-- <div class="col-lg-12">
            <div class="form-group">
               <label> Product Image</label>
               <div class="image-upload">
                  <input type="file">
                  <div class="image-uploads">
                     <img src="assets/img/icons/upload.svg" alt="img">
                     <h4>Drag and drop a file to upload</h4>
                  </div>
               </div>
            </div>
         </div> -->
         <div class="col-lg-12">
                <input type="submit" class="btn btn-submit me-2" value="Add New">
                <!-- <button class="btn btn-cancel">Cancel</button> -->
         </div>
      </div>
      </form>
   </div>
</div>
</div>
@endsection