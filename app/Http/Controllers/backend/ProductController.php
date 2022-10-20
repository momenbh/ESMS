<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function generate(){
        return view('Backend.pages.product.product');
    }
    public function form(){
        return view('Backend.pages.product.productform');
    }
    public function store(Request $request){
        Product::create([
            'product_id'=>$request->product_id,
            'product_name'=>$request->product_name,
            'stock_status'=>$request->stock_status,
            'product_wranty'=>$request->product_wranty,

        ]);
        return redirect()->back();

    }
}
