@extends("cms.layout.main")
@section('title',"Category") 
@section('pagetitle',"Category") 
@section('pageSubtitle',"Update product Category") 

@section('pageSubtitle',"Product Category") 
@section('button','Dashboard > Update Category') 
@section('content')
   <div class="card">
      <div class="card-body">
         <form action="{{ url('category-update/'.$category->id) }}" method="post" enctype="multipart/form-data">
         @csrf
         @method('PUT')
            <div class="row">
               <div class="col-lg-6 col-sm-6 col-12">
                  <div class="form-group">
                     <label>Category Name<span style="color:red;">*</span></label>
                     <input type="text" name="category_name" value="{{ $category->category_name }}" placeholder="category name">
                     @error('category_name')
                        <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="col-lg-6 col-sm-6 col-12">
                  <div class="form-group">
                     <label>Category Code<span style="color:red;">*</span></label>
                     <input type="text" name="category_code" value="{{ $category->category_code }}" >
                     @error('category_code')
                        <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="col-lg-6 col-sm-6 col-12">
                  <div class="form-group">
                     <label>Order By<span style="color:red;">*</span></label>
                     <input type="text" name="order_by" value="{{ $category->order_by }}" >
                     @error('order_by')
                        <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="col-lg-6 col-sm-6 col-12">
                  <div class="form-group">
                     <label>Category Image</label>
                     <input type="file" name="category_file" value="{{ old('category_file')}}" >
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label>Description</label>
                     <textarea class="form-control" name="description">{{ $category->category_description }}</textarea>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-6 col-12">
                  <div class="form-group">
                     <label>Category OLD Image</label>
                     <img src="{{ asset('public').'/'.$category->image }}" style="height: 120px;">
                  </div>
               </div>
               <div class="col-lg-12">
                  <input type="submit" class="btn btn-submit me-2" value="Update">
                  <!-- <button class="btn btn-cancel">Cancel</button> -->
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection