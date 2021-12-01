<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ContentController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\CartController;
use App\Http\Controllers\backend\StockController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\ProductController as FrontendProduct;
use App\Http\Controllers\frontend\SingleProductController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// frontend

Route::get('/master',[IndexController::class,'master']);
Route::get('/home',[IndexController::class,'index2'])->name('home');
Route::get('/single/product/{id}',[FrontendProduct::class,'singleProduct'])->name('single.product');
// Route::post('/product/add/cart/{id}',[FrontendProduct::class,'addtocart'])->name('product.add.cart');

//cart
Route::get('/product/cart',[CartController::class,'cart'])->name('product.cart');
Route::get('/product/add/cart/{id}',[CartController::class,'addToCart'])->name('add.product.to.cart');
Route::get('/cart/destroy',[CartController::class,'cartDestroy'])->name('cart.distroy');
Route::post('/update/cart',[CartController::class,'cartUpdate'])->name('update.cart');

// Route::get('/frontend/master',[UserController::class,'master']);
// Route::get('/index',[IndexController::class,'index'])->name('index');
// Route::get('/single/product/{id}',[SingleProductController::class,'singleProduct'])->name('frontend.single.product');

// single product
Route::get('/single/product',[SingleProductController::class,'view_product'])->name('view.single.product');


// backend
Route::get('/admin/master',[UserController::class,'master']);
Route::get('/',[ContentController::class,'dashboard'])->name('admin.dashboard');
// product
Route::get('/product/list',[ProductController::class,'productlist'])->name('admin.product.list');
Route::post('/add/product',[ProductController::class,'addproduct'])->name('admin.add.product');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
Route::get('/product/restore{id}',[ProductController::class,'restore'])->name('product.restore');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('admin.product.edit');
Route::put('/product/update/{id}',[ProductController::class,'update'])->name('admin.product.update');
// category
Route::get('/category/list',[CategoryController::class,'categorylist'])->name('admin.category.list');
Route::post('/add/category',[CategoryController::class,'add'])->name('admin.add.category');
Route::get('/delete/category{id}', [CategoryController::class,'delete'])->name('product.category.delete');
Route::get('/category/restore/{id}',[CategoryController::class,'restore'])->name('category.restore');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('admin.category.update');

//company
Route::get('/company/list',[CompanyController::class,'companyList'])->name('company.list');
Route::post('/company/add',[CompanyController::class,'companyAdd'])->name('company.add');
Route::get('/company/edit{id}',[CompanyController::class,'companyEdit'])->name('company.edit');
Route::put('/company/update{id}',[CompanyController::class,'companyUpdate'])->name('company.update');
Route::get('/company/delete/{id}',[CompanyController::class,'companyDelete'])->name('company.delete');
Route::get('/company/restore/{id}',[CompanyController::class,'companyRestore'])->name('company.restore');

// stock
Route::get('/categoty',[StockController::class,'categoPryList'])->name('category.product');
Route::get('category/details/{id}',[StockController::class,'categoryDetails'])->name('category.details');
