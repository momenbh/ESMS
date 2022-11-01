<?php

namespace App\Http\Controllers\backend;

use App\Models\Discount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscountController extends Controller
{
    public function discount(){
        $discount=Discount::orderby('id','desc')->paginate(5);
        return view('Backend.pages.discount.discount',compact('discount'));
    }
    public function form(){
        return view('Backend.pages.Discount.discountform');
    }
    public function store(Request $request){
        Discount::create([
         'product_id'=>$request->product_id,
         'product_price'=>$request->product_price,
         'product_name'=>$request->product_name,
         'vendors_name'=>$request->vendors_name,
         'percent'=>$request->percent,
        
        ]);
        return redirect()->route('product.discount');
    }
    public function view($id){
        $discount=Discount::find($id);
        return view('Backend\pages\Discount\discountview',compact('discount'));
    }
    public function delete($id){
        $discount=Discount::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $discount=Discount::find($id);
        return view('Backend.pages.Discount.discountedit',compact('discount'));
    }
    public function update(Request $request,$id){
        $discount=Discount::find($id);
        $discount->update([
         'product_id'=>$request->product_id,
         'product_price'=>$request->product_price,
         'product_name'=>$request->product_name,
         'vendors_name'=>$request->vendors_name,
         'percent'=>$request->percent,
        
        ]);
        return redirect()->route('product.discount');
    }
   
}
