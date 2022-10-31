<?php

namespace App\Http\Controllers\backend;

use App\Models\Discount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscountController extends Controller
{
    public function discount(){
        return view('Backend.pages.discount.discount');
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
        return redirect()->back();
    }
}
