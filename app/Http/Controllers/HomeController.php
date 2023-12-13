<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('category_id','0')->orderBy('id','asc')->get();

       return view('home',['categorys'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs(Request $request)
    {
        return view('aboutus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contactUs(Request $request)
    {
        return view('contactus');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function collectionsData(Request $request)
    {
        $category = Category::where('category_id','0')->orderBy('id','asc')->get();
        return view('collectionsdata',['categorys'=>$category]);
    }

    public function collectionsCategoryWiseData(Request $request, $id)
    {
        
        $product = Product::select('id','product_name','product_slug','washing_instruction','size_specification')->where('status','1')->where('category_id',$id)->orderBy('id','asc')->get();
        foreach($product as $products){
            $pdata = new \stdClass;
            $pdata->product =$products;
            $productsImages = DB::table('products_images')->where('product_id',$products->id)->first()->product_images;
            $pdata->image =$productsImages;
            $data[] =$pdata;
        }
        $category = Category::where('id',$id)->first();

        return view('collectionsdata-category',['Products'=>$data??'','category'=>$category]);
    }

    public function getProductImagesData(Request $request, $slug)
    {
        //dd($slug);
        $productid = Product::where('status','1')->where('product_slug',$slug)->first();
        $productImages = DB::table('products_images')->where('product_id',$productid->id)->orderBy('id','asc')->get();
        $category = Category::where('id',$productid->category_id)->first()->category_name;
        //dd($category);
        return view('all-product-images',['Products'=>$productid,
            'productImages'=>$productImages,
            'categorys'=>$category
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function blogData(Request $request)
    {
        return view('blogdata');
    }

    public function blogDetails(Request $request)
    {
        return view('blogdata');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function termsOfUse(Request $request)
    {
        return view('termsofuse');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function privacyPolicy(Request $request)
    {
        return view('privacypolicy');
    }
}
