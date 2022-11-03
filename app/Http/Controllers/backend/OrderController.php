<?php

namespace App\Http\Controllers\backend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function order(){
        $order=Order::orderby('id','desc')->paginate(5);
        return view('Backend.pages.Order.order',compact('order'));
    }
    public function form(){
        return view('Backend.pages.order.orderform');
    }
    public function store(Request$request){
        Order::create([
         'coustomer_id'=>$request->coustomer_id,
         'total_price'=>$request->total_price,
         'total_discount'=>$request->total_discount,
         'total_vat'=>$request->total_vat,
         'total_payable'=>$request->total_payable,
         'sell_by'=>$request->sell_by,
        ]);
        return redirect()->route('cretae.oredr');
    }
    public function delete($id){
        $order=Order::find($id)->delete();
        return redirect()->back();
    }
    public function view($id){
        $order=Order::find($id);
        return view('Backend.pages.Order.orderview',compact('order'));
    }
    public function edit($id){
        $order=Order::find($id);
        return view('Backend.pages.Order.orderedit',compact('order'));
    }
    public function update(Request $request,$id){
        $order=Order::find($id);
        $order->update([
            'coustomer_id'=>$request->coustomer_id,
            'total_price'=>$request->total_price,
            'total_discount'=>$request->total_discount,
            'total_vat'=>$request->total_vat,
            'total_payable'=>$request->total_payable,
            'sell_by'=>$request->sell_by,
        ]);
        return redirect()->route('cretae.oredr');
    }
}
