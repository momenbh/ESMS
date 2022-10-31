<?php

namespace App\Http\Controllers\backend;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    public function Payment(){
        return view('Backend.pages.Payment.payment');
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
        return Redirect()->back();
    }
}
