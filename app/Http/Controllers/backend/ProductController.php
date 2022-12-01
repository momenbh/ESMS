<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use App\Models\Category;
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
        $category=Category::all();
        return view('Backend.pages.product.productform',compact('category'));
    }
    public function store(Request $request){
        //    dd($request->all());
          $request->validate([
          
            'product_name'=>'required|string',
            'product_price'=>'required|integer',
            'brands'=>'required|string',
            'stock_status'=>'required|string',
            'product_wranty'=>'required|integer|min:1',
            'category_id'=>'required',
            'image'=>'required',

          ]);

          $fileName=null;
        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }

        Product::create([
          
            'product_name'=>$request->product_name,
            'product_price'=>$request->product_price,
            'brands'=>$request->brands,
            'stock_status'=>$request->stock_status,
            'product_wranty'=>$request->product_wranty,
            'category_id'=>$request->category_id,
            'image' => $fileName,

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
        $category=Category::all();
        return view('Backend.pages.product.productedit',compact('product','category'));
    }
    public function update(Request $request,$id){
        $product=Product::find($id);
        $fileName=$product->image;
        // var_dump($fileName);
        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }
        // dd($fileName);
        // dd($product->category_id);
        $product->update([
            'product_name'=>$request->product_name,
            'product_price'=>$request->product_price,
            'category_id'=>$request->category_id,
            'brands'=>$request->brands,
            'stock_status'=>$request->stock_status,
            'product_wranty'=>$request->product_wranty,
            'image' => $fileName,
           

        ]);
        return redirect()->route('product.create');
    }
}
