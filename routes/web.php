<?php

use App\Models\Category;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\VendorController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\DashbordController;
use App\Http\Controllers\backend\DiscountController;
use App\Http\Controllers\backend\FeedbackController;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\forntend\WebHomeController;

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



//home

Route::get('/',[HomeController::class,'home'])->name('home');
Route::post('/register',[webHomeController::class,'registration'])->name('registration');
Route::post('/user/login',[webHomeController::class,'userlogin'])->name('user.login');

Route::get('/search',[webHomeController::class,'search'])->name('user.search');
Route::get('/category-wise-product/{category_id}',[webHomeController::class,'categorywishproducts'])->name('category.wish.products');
Route::get('/product/view/{product_id}',[WebHomeController::class,'productview'])->name('customer.product.view');

Route::group(['middleware'=>'auth'],function(){


Route::get('/user/logout',[webHomeController::class,'userlogout'])->name('user.logout');
Route::get('/profile',[WebHomeController::class,'profile'])->name('user.profile');
Route::put('/profile/update',[WebHomeController::class,'updateprofile'])->name('profile.update');


});
Route::group(['middleware'=>'checkCustomer'],function(){

Route::post('/order/create/{product_id}', [WebHomeController::class, 'orderCreate'])->name('order.create');
Route::get('/product/buy/form/{product_id}',[webHomeController::class,'viewBuyForm'])->name('buy.form');


});


//login
Route::get('/login',[logincontroller::class,'login'])->name('login');
Route::post('/do-login',[logincontroller::class,'dologin'])->name('do.login');

Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){

Route::group(['middleware'=>'checkAdmin'],function(){    

Route::get('/logout',[logincontroller::class,'logout'])->name('logout');


//dashboard
Route::get('/dashboard',[DashbordController::class,'dashboard'])->name('dashboard');

//product
Route::get('/create/product',[ProductController::class,'generate'])->name('product.create');
Route::get('/form/product',[ProductController::class,'form'])->name('form.product');
Route::post('/store/product',[ProductController::class,'store'])->name('store.product');
Route::get('/product/view/{id}',[ProductController::class,'view'])->name('view.product');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('delete.product');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('edit.product');
Route::post('/product/update/{id}',[ProductController::class,'update'])->name('update.product');



//vendor
Route::get('/vendor',[VendorController::class,'create'])->name('vendor.create');
Route::get('/form/vendor',[VendorController::class,'form'])->name('form.vendor');
Route::post('/store/vendor',[VendorController::class,'store'])->name('store.vendor');
Route::get('/store/view/{id}',[VendorController::class,'view'])->name('view.vendor');
Route::get('/store/delete/{id}',[VendorController::class,'delete'])->name('delete.vendor');
Route::get('/store/edit/{id}',[VendorController::class,'edit'])->name('edit.vendor');
Route::post('/store/update/{id}',[VendorController::class,'update'])->name('update.vendor');

//customer

Route::get('/customer',[CustomerController::class,'create'])->name('customer.create');
 
//catagory
Route::get('/category',[CategoryController::class,'create'])->name('create.category');
Route::get('/category/form',[CategoryController::class,'form'])->name('form.category');
Route::post('/category/store',[CategoryController::class,'store'])->name('store.category');
Route::get('/category/views/{id}',[CategoryController::class,'views'])->name('view.category');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('edit.category');
Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('update.category');
Route::get('/Category/delete/{id}',[CategoryController::class,'delete'])->name('delete.category');



//subcategory
Route::get('/subcategory',[SubcategoryController::class,'create'])->name('create.subcategory');
Route::get('/subcategory/form',[SubcategoryController::class,'form'])->name('form.subcategory');
Route::post('/subcategory/store',[SubcategoryController::class,'store'])->name('store.subcategory');
Route::get('/subcategory/views/{id}',[SubcategoryController::class,'view'])->name('view.subcategory');
Route::get('/subcategory/delet/{id}',[SubcategoryController::class,'delete'])->name('delete.subcategory');
Route::get('/subcategory/edit/{id}',[SubcategoryController::class,'edit'])->name('edit.subcategory');
Route::post('/subcategory/update/{id}',[SubcategoryController::class,'update'])->name('update.subcategory');

//discount
Route::get('/product/discount',[DiscountController::class,'discount'])->name('product.discount');
Route::get('/product/form',[DiscountController::class,'form'])->name('form.discount');
Route::post('/product/store',[DiscountController::class,'store'])->name('store.discount');
Route::get('/product/discount/views/{id}',[DiscountController::class,'view'])->name('view.discount');
Route::get('/product/discount/delete/{id}',[DiscountController::class,'delete'])->name('delete.discount');
Route::get('/product/discount/edit/{id}',[DiscountController::class,'edit'])->name('edit.discount');
Route::post('/product/discount/update/{id}',[DiscountController::class,'update'])->name('update.discount');

//payment
Route::get('/payment',[PaymentController::class,'Payment'])->name('create.payment');
Route::get('/payment/form',[PaymentController::class,'form'])->name('form.payment');
Route::post('/payment/store',[PaymentController::class,'store'])->name('store.payment'); 
Route::get('/payment/delete/{id}',[PaymentController::class,'delete'])->name('delete.payment');
Route::get('/payment/delete/{id}',[PaymentController::class,'delete'])->name('delete.payment');
Route::get('/payment/view/{id}',[PaymentController::class,'views'])->name('view.payment');
Route::get('/payment/edit/{id}',[PaymentController::class,'edit'])->name('edit.payment');
Route::post('/payment/update/{id}',[PaymentController::class,'update'])->name('update.payment');

//order
Route::get('/order',[OrderController::class,'order'])->name('cretae.oredr');
Route::get('/order/form',[OrderController::class,'form'])->name('form.oredr');
Route::post('/order/store/',[OrderController::class,'store'])->name('store.oredr');
Route::get('/order/delete/{id}',[OrderController::class,'delete'])->name('delete.order');
Route::get('/order/view/{id}',[OrderController::class,'view'])->name('view.order');
Route::get('/order/edit/{id}',[OrderController::class,'edit'])->name('edit.order');
Route::post('/order/update/{id}',[OrderController::class,'update'])->name('update.order');






//feedback
Route::get('/feedback',[FeedbackController::class,'feedback'])->name('create.feedback');
Route::get('/feedback/form',[FeedbackController::class,'form'])->name('form.feedback');
Route::post('/feedback/store',[FeedbackController::class,'store'])->name('store.feedback');
Route::get('/feedback/view/{id}',[FeedbackController::class,'views'])->name('view.feedback');
Route::get('/feedback/edit/{id}',[FeedbackController::class,'edit'])->name('edit.feedback');
Route::post('/feedback/update/{id}',[FeedbackController::class,'update'])->name('update.feedback');
Route::get('/feedback/delete/{id}',[FeedbackController::class,'delete'])->name('delete.feedback');

//reports
Route::get('/report',[ReportController::class,'report'])->name('create.report');
Route::get('/report/form',[ReportController::class,'form'])->name('form.report');
Route::post('/report/store',[ReportController::class,'store'])->name('store.report');
Route::get('/report/delete/{id}',[ReportController::class,'delete'])->name('delete.report');
Route::get('/report/view/{id}',[ReportController::class,'view'])->name('view.report');
Route::get('/report/edit/{id}',[ReportController::class,'edit'])->name('edit.report');
Route::post('/report/update/{id}',[ReportController::class,'update'])->name('update.report');

});
});
