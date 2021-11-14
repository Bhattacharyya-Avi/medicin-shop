<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ContentController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\UserController;
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

Route::get('/admin/master',[UserController::class,'master']);
Route::get('/',[ContentController::class,'dashboard'])->name('admin.dashboard');
Route::get('/product/list',[ProductController::class,'productlist'])->name('admin.product.list');
Route::get('/category/list',[CategoryController::class,'categorylist'])->name('admin.category.list');
Route::post('/add/category',[CategoryController::class,'add'])->name('admin.add.category');
