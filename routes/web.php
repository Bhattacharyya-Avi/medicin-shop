<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ContentController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\UserController;
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

// single product
Route::get('/single/product',[SingleProductController::class,'view_product'])->name('view.single.product');

Route::get('/admin/master',[UserController::class,'master']);
Route::get('/',[ContentController::class,'dashboard'])->name('admin.dashboard');
// product
Route::get('/product/list',[ProductController::class,'productlist'])->name('admin.product.list');
Route::post('/add/product',[ProductController::class,'addproduct'])->name('admin.add.product');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
Route::get('/product/restore{id}',[ProductController::class,'restore'])->name('product.restore');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('admin.product.edit');
Route::put('/product/update',[ProductController::class,'update'])->name('admin.product.update');
// category
Route::get('/category/list',[CategoryController::class,'categorylist'])->name('admin.category.list');
Route::post('/add/category',[CategoryController::class,'add'])->name('admin.add.category');
Route::get('/delete/category{id}', [CategoryController::class,'delete'])->name('product.category.delete');
Route::get('/category/restore/{id}',[CategoryController::class,'restore'])->name('category.restore');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
Route::get('/category/update/{id}',[CategoryController::class,'update'])->name('admin.category.update');
