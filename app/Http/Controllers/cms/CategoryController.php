<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;
use validate;
use Image;
use Carbon\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('category_id',0)->get();
        return view('cms.category-list',['category' =>$category]);
    }
    public function subIndex()
    {
        $category = Category::where('category_id','!=','0')->get();
        return view('cms.subcategory-list',['category' =>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        

        return view('cms.category-add');
    }

    public function subCreate()
    {
        $category = Category::where('category_id',0)->get();
        return view('cms.subcategory-add',['category' =>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->file('category_file'));
        $request->validate([
            'category_name' => 'required|unique:categories',
            'category_code' => 'required|unique:categories',
            'order_by' => 'required|unique:categories',
            'category_file' => 'required|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
        ]);
        $img = $request->file('category_file');
        $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        Image::make($img)->resize(917,1000)->save(public_path('upload/categoryimage/'.$make_name));
        $uploadPath = 'upload/categoryimage/'.$make_name;
        Category::insert([
            'category_name' => $request->category_name,
            'category_code' => $request->category_code,
            'order_by' => $request->order_by,
            'image' => $uploadPath,
            'category_description' => $request->description,
            'category_id' => 0,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
			'message' => 'Category Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    }
    public function subStore(Request $request)
    {
        $request->validate([
            'category_id' => 'required|not_in:0',
            'category_name' => 'required|unique:categories',
            'category_code' => 'required|unique:categories',
        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'category_code' => $request->category_code,
            'category_description' => $request->description,
            'category_id' => $request->category_id,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
			'message' => 'Category Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
       // dd($request->all());
        $request->validate([
            'category_name' => 'required',
            'category_code' => 'required',
            'order_by' => 'required',
           // 'category_file' => 'required|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
        ]);
        if(!empty($request->file('category_file'))){
            $img = $request->file('category_file');
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(917,1000)->save(public_path('upload/categoryimage/'.$make_name));
            $uploadPath = 'upload/categoryimage/'.$make_name;
        }else{
            $category = Category::findOrFail($id);
            $uploadPath = $category->image;
        }
        Category::findOrFail($id)->update([
            'category_name' => $request->category_name,
            'category_code' => $request->category_code,
            'order_by' => $request->order_by,
            'image' => $uploadPath,
            'category_description' => $request->description,
            'category_id' => 0,
            'updated_at' => Carbon::now()
        ]);
        $notification = array(
			'message' => 'Category update Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
    public function CategoryEdit($id){

    	$category = Category::findOrFail($id);

    	return view('cms.category_edit',compact('category'));

    }


    public function CategoryUpdate(Request $request ,$id){

    	 

      Category::findOrFail($id)->update([
		'category_name' => $request->category_name,
        'category_code' => $request->category_code,
        'category_description' => $request->description,
        'category_id' => $request->category_id??'0',

    	]);

	    $notification = array(
			'message' => 'Category Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('all.category')->with($notification);


    } // end method


    public function CategoryDelete($id){

    	Category::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'Category Deleted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 
    public function subCategoryEdit($id){

    	$category = Category::findOrFail($id);

    	return view('backend.category.category_edit',compact('category'));

    }


    public function subCategoryUpdate(Request $request ,$id){

    	 

      Category::findOrFail($id)->update([
		'category_name' => $request->category_name,
        'category_code' => $request->category_code,
        'category_description' => $request->description,
        'category_id' => $request->category_id ?? '0',

    	]);
	    $notification = array(
			'message' => 'Category Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('all.category')->with($notification);
    } // end method


    public function subCategoryDelete($id){

    	Category::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'Category Deleted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    } // end method 
}
