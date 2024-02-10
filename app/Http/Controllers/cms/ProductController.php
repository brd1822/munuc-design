<?php
namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::where('status','1')->orderBy('id','asc')->get();
        foreach($product as $products){
            $pdata = new \stdClass;
            $pdata->product =$products;
            $category = Category::where('id',$products->category_id)->first()->category_name;
            $pdata->categorys =$category;
            $productsImages = DB::table('products_images')->where('product_id',$products->id)->first()->product_images;
            $pdata->image =$productsImages;
            $data[] =$pdata;
        }
        return view('cms.product-list',['product'=> $data ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function moreImages()
    {
        $Brand = Brand::get();
        $product = Product::where('status',1)->get();
        
        return view('cms.product-moreImages',['product'=>$product,'Brand' =>$Brand]);
    }


    public function create()
    {
        $Brand = Brand::get();
        $category = Category::where('category_id',0)->get();
        
        return view('cms.product-add',['category'=>$category,'Brand' =>$Brand]);
    }
    public function GetSubCategory($category_id){
        $subcat = Category::where('category_id',$category_id)->orderBy('category_name','ASC')->get();
        return json_encode($subcat);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'product_name' => 'required',
            //'product_name' => 'required|exists:product_name',
            'category_id' => 'required|not_in:0',
            'old_price' => 'required',
            'new_price' => 'required',
            'multi_img.*' => 'mimes:jpg,jpeg,bmp,png|max:10240',
            'multi_img' => 'max:5',
          ]);
            //dd('HJi');
            $product_id = Product::insertGetId([
                'product_name' => $request->product_name,
                'product_slug' =>  strtolower(str_replace(' ', '-', $request->product_name)),
                'brand_id' => $request->brand_id??'0',
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'description' => $request->description,
                'old_price' => $request->old_price??'0',
                'new_price' => $request->new_price??'0',
                'tax' => $request->tax??'0',
                'discountType' => $request->discountType??'0',
                'quantity' => $request->quantity??'0',
                'washing_instruction' => $request->washing_instruction??'0',
                'size_specification' => $request->size_specification??'0',
                'feature_products' => $request->feature_products??'0',
                'explore_more_products' => $request->explore_more_products??'0',
                'status' => 1,
                'created_at' => Carbon::now(),   
            ]);
            ////////// Multiple Image Upload Start ///////////
            $images = $request->file('multi_img');
            //dd($request->file('multi_img'));
            foreach ($images as $img) {
              $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
              Image::make($img)->resize(917,1000)->save(public_path('upload/products/multi-image/'.$make_name));
              $uploadPath = 'upload/products/multi-image/'.$make_name;

              DB::table('products_images')->insert(
                [
                    'product_id' => $product_id, 
                    'product_images' => $uploadPath,
                    'status' => 1
                ]);
            }
            ////////// Een Multiple Image Upload Start ///////////
             $notification = array(
                  'message' => 'Product Inserted Successfully',
                  'alert-type' => 'success'
              );
              return redirect()->back()->with($notification);
    }


    public function moreImagesUpload(Request $request)
    {
       
        $request->validate([
            'product_id' => 'required|not_in:0',
            'multi_img.*' => 'mimes:jpg,jpeg,bmp,png|max:10240',
            'multi_img' => 'max:5',
          ]);
          //dd($request->all());
        ////////// Multiple Image Upload Start ///////////
        $images = $request->file('multi_img');
        //dd($request->file('multi_img'));
        foreach ($images as $img) {
          $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
          Image::make($img)->resize(917,1000)->save(public_path('upload/products/multi-image/'.$make_name));
          $uploadPath = 'upload/products/multi-image/'.$make_name;

          DB::table('products_images')->insert(
            [
                'product_id' => $request->product_id, 
                'product_images' => $uploadPath,
                'status' => 1
            ]);
        }
        ////////// Een Multiple Image Upload Start ///////////
         $notification = array(
              'message' => 'Product Inserted Successfully',
              'alert-type' => 'success'
          );
          return redirect()->back()->with($notification);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $Brand = Brand::get();
        $category = Category::where('category_id',0)->get();
        $product = Product::findOrFail($id);
        
        return view('cms.product-edit',['category'=>$category,'Brand' =>$Brand, 'product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, $id)
    {
        Product::findOrFail($id)->update(['status'=>0]);

    	$notification = array(
			'message' => 'Product Deleted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    }
}
