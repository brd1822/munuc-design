<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\cms\DashboardController;
use App\Http\Controllers\cms\ProductController;
use App\Http\Controllers\cms\BrandController;
use App\Http\Controllers\cms\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function() {
        Artisan::call('optimize:clear');
        return redirect()->back();
    });

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('collections', [HomeController::class, 'collectionsData'])->name('collections');
Route::get('collections-cat/{id}', [HomeController::class, 'collectionsCategoryWiseData'])->name('collections-cat');
Route::get('product-cat/{slug}', [HomeController::class, 'getProductImagesData'])->name('product-cat');
Route::get('blog', [HomeController::class, 'blogData'])->name('blog');
Route::get('blog-detail', [HomeController::class, 'blogDetails'])->name('blogdetail');
Route::get('terms-of-use', [HomeController::class, 'termsOfUse'])->name('terms-OfUse');
Route::get('privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('reviews-detail', [HomeController::class, 'reviewsDetails'])->name('reviewsDetails');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth','prevent-back-history'])->group(function () {
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('product-add',[ProductController::class,'create'])->name('product-add');
Route::get('product-edit/{id}',[ProductController::class,'edit'])->name('product-edit');
Route::post('product-save',[ProductController::class,'store'])->name('product-save');
Route::put('product-update',[ProductController::class,'update'])->name('product-update');
Route::get('more-images',[ProductController::class,'moreImages'])->name('more-images');
Route::post('product-images',[ProductController::class,'moreImagesUpload'])->name('product-images');
Route::get('product-list',[ProductController::class,'index'])->name('product-list');
Route::get('product-delete/{id}', [ProductController::class, 'destroy'])->name('product-delete');


Route::get('category-add',[CategoryController::class,'create'])->name('category-add');
Route::post('category-save',[CategoryController::class,'store'])->name('category-save');
Route::put('category-update/{id}',[CategoryController::class,'update'])->name('category-update');
Route::get('category-list',[CategoryController::class,'index'])->name('category-list');

Route::get('category-edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category-edit');
Route::post('category-update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category-update');
Route::get('category-delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category-delete');

Route::get('subcategory-add',[CategoryController::class,'subCreate'])->name('subcategory-add');
Route::post('subcategory-save',[CategoryController::class,'subStore'])->name('subcategory-save');
Route::get('subcategory-list',[CategoryController::class,'subIndex'])->name('subcategory-list');
Route::get('subcategory-edit/{id}', [CategoryController::class, 'subCategoryEdit'])->name('subcategory-edit');
Route::post('subcategory-update/{id}', [CategoryController::class, 'subCategoryUpdate'])->name('subcategory-update');
Route::get('subcategory-delete/{id}', [CategoryController::class, 'subCategoryDelete'])->name('subcategory-delete');


Route::get('brand-add',[BrandController::class,'create'])->name('brand-add');
Route::post('brand-save',[BrandController::class,'store'])->name('brand-save');
Route::get('brand-list',[BrandController::class,'index'])->name('brand-list');
Route::get('brand-edit/{id}', [BrandController::class, 'Edit'])->name('brand-edit');
Route::post('brand-update/{id}', [BrandController::class, 'update'])->name('brand-update');
Route::get('brand-delete/{id}', [BrandController::class, 'destroy'])->name('brand-delete');

Route::get('/subcategory/ajax/{category_id}', [ProductController::class, 'GetSubCategory']);

});