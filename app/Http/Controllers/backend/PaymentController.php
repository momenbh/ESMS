<?php

namespace App\Http\Controllers\backend;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    public function Payment(){
        $payment=Payment::orderby('id','desc')->paginate(5);
        return view('Backend.pages.Payment.payment',compact('payment'));
    }
    public function form(){
        return view('Backend.pages.Payment.paymentform');
    }
    public function store(Request $request){
        Payment::create([

            'amount'=>$request->amount,
            'vendors'=>$request->vendors,
            'customer_id'=>$request->customer_id,
            'customer_name'=>$request->customer_name,
            'status'=>$request->status,
        ]);
        return Redirect()->route('create.payment');
    }
    public function delete($id){
        $payment=Payment::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $payment=Payment::find($id);
        return view('Backend.pages.Payment.paymentedit',compact('payment'));

    }
    public function update(Request $request,$id){
        $payment=Payment::find($id);
        $payment->update([
            'amount'=>$request->amount,
            'vendors'=>$request->vendors,
            'customer_id'=>$request->customer_id,
            'customer_name'=>$request->customer_name,
            'status'=>$request->status,

        ]);
        return redirect()->route('create.payment');
    }
}
