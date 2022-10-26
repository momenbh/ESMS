<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\VendorController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\DashbordController;


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
//     return view('Backend.master');
// });


//dashboard
Route::get('/',[DashbordController::class,'dashboard']);

//product
Route::get('/create/product',[ProductController::class,'generate'])->name('product.create');
Route::get('/form/product',[ProductController::class,'form'])->name('form.product');
Route::post('/store/product',[ProductController::class,'store'])->name('store.product');
//vendor
Route::get('/vendor',[VendorController::class,'create'])->name('vendor.create');
Route::get('/form/vendor',[VendorController::class,'form'])->name('form.vendor');
Route::post('/store/vendor',[VendorController::class,'store'])->name('store.vendor');
//customer
Route::get('/customer',[CustomerController::class,'create'])->name('customer.create');
//catagory
Route::get('/category',[CategoryController::class,'create'])->name('create.category');
Route::get('/category/form',[CategoryController::class,'form'])->name('form.category');
Route::post('/category/store',[CategoryController::class,'store'])->name('store.category');



