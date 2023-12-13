@extends("cms.layout.main")

@section('title',"Sub Category") 
@section('pagetitle',"Sub Category") 
@section('pageSubtitle',"Create new Sub Category") 

@section('pageSubtitle',"Sub Category") 
@section('button','Dashboard > New Sub Category') 

@section('content')
<div class="card">
   <div class="card-body">
   <form action="{{ route('subcategory-save') }}" method="post">
         @csrf
      <div class="row">
         <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
               <label>Parent Category</label>
               <select class="select" name="category_id">
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
         <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
               <label>Sub Category Name<span style="color:red;">*</span></label>
               <input type="text" name="category_name" value="{{ old('category_name')}}" placeholder="category name">
               @error('category_name')
                  <span class="text-danger">{{ $message }}</span>
               @enderror
            </div>
         </div>
         <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
               <label>Sub Category Code<span style="color:red;">*</span></label>
               <input type="text" name="category_code" value="{{ old('category_code')}}" >
               @error('category_code')
                  <span class="text-danger">{{ $message }}</span>
               @enderror
            </div>
         </div>
         <div class="col-lg-12">
            <div class="form-group">
               <label>Description</label>
               <textarea class="form-control" name="description"></textarea>
            </div>
         </div>
         <div class="col-lg-12">
            <input type="submit" class="btn btn-submit me-2" value="Add New">
            <!-- <a href="subcategorylist.html" class="btn btn-cancel">Cancel</a> -->
         </div>
      </div>
      </form>
   </div>
</div>
</div>
@endsection