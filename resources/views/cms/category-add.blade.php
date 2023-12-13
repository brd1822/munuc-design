@extends("cms.layout.main")
@section('title',"Category") 
@section('pagetitle',"Category") 
@section('pageSubtitle',"Create new product Category") 

@section('pageSubtitle',"Product Category") 
@section('button','Dashboard > New Category') 
@section('content')
   <div class="card">
      <div class="card-body">
         <form action="{{ route('category-save') }}" method="post" enctype="multipart/form-data">
         @csrf
            <div class="row">
               <div class="col-lg-6 col-sm-6 col-12">
                  <div class="form-group">
                     <label>Category Name<span style="color:red;">*</span></label>
                     <input type="text" name="category_name" value="{{ old('category_name')}}" placeholder="category name">
                     @error('category_name')
                        <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="col-lg-6 col-sm-6 col-12">
                  <div class="form-group">
                     <label>Category Code<span style="color:red;">*</span></label>
                     <input type="text" name="category_code" value="{{ old('category_code')}}" >
                     @error('category_code')
                        <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="col-lg-6 col-sm-6 col-12">
                  <div class="form-group">
                     <label>Category Image<span style="color:red;">*</span></label>
                     <input type="file" name="category_file" value="{{ old('category_file')}}" >
                     @error('category_file')
                        <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label>Description</label>
                     <textarea class="form-control" name="description"></textarea>
                  </div>
               </div>
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