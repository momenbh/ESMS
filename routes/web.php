<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\VendorController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\DashbordController;
use App\Http\Controllers\backend\DiscountController;
use App\Http\Controllers\backend\FeedbackController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\SubcategoryController;

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
//subcategory
Route::get('/subcategory',[SubcategoryController::class,'create'])->name('create.subcategory');
Route::get('/subcategory/form',[SubcategoryController::class,'form'])->name('form.subcategory');
Route::post('/subcategory/store',[SubcategoryController::class,'store'])->name('store.subcategory');
//discount
Route::get('/product/discount',[DiscountController::class,'discount'])->name('product.discount');
Route::get('/product/form',[DiscountController::class,'form'])->name('form.discount');
Route::post('/product/store',[DiscountController::class,'store'])->name('store.discount');
//
Route::get('/payment',[PaymentController::class,'Payment'])->name('create.payment');
Route::get('/payment/form',[PaymentController::class,'form'])->name('form.payment');
Route::post('/payment/store',[PaymentController::class,'store'])->name('store.payment');
//feedback
Route::get('/feedback',[FeedbackController::class,'feedback'])->name('create.feedback');
Route::get('/feedback/form',[FeedbackController::class,'form'])->name('form.feedback');
Route::post('/feedback/store',[FeedbackController::class,'store'])->name('store.feedback');
//reports
Route::get('/report',[ReportController::class,'report'])->name('create.report');
Route::get('/report/form',[ReportController::class,'form'])->name('form.report');
Route::post('/report/store',[ReportController::class,'store'])->name('store.report');



