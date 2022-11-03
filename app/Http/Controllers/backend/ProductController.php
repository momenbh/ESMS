<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function generate(){
        $product=Product::orderby('id','desc')->paginate(5);
        return view('Backend.pages.product.product',compact('product'));
    }
    public function form(){
        return view('Backend.pages.product.productform');
    }
    public function store(Request $request){
        Product::create([
            'product_id'=>$request->product_id,
            'product_name'=>$request->product_name,
            'brands'=>$request->brands,
            'stock_status'=>$request->stock_status,
            'product_wranty'=>$request->product_wranty,

        ]);
        return redirect()->route('product.create');

    }
    public function view($id){
        $product=Product::find($id);
        return view('Backend.pages.product.productview',compact('product'));
    }
    public function delete($id){
        $product=Product::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $product=Product::find($id);
        return view('Backend.pages.product.productedit',compact('product'));
    }
    public function update(Request $request,$id){
        $product=Product::find($id);
        $product->update([

            'product_id'=>$request->product_id,
            'product_name'=>$request->product_name,
            'brands'=>$request->brands,
            'stock_status'=>$request->stock_status,
            'product_wranty'=>$request->product_wranty,


        ]);
        return redirect()->route('product.create');
    }
}
