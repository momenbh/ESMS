<?php

use App\Http\Controllers\backend\DashbordController;
use App\Http\Controllers\backend\ProductController;
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
//     return view('Backend.master');
// });


//dashboard
Route::get('/',[DashbordController::class,'dashboard']);

//product
Route::get('/cerate/product',[ProductController::class,'generate'])->name('product.create');
Route::get('/form/product',[ProductController::class,'form'])->name('form.product');
Route::post('/store/product',[ProductController::class,'store'])->name('store.product');



