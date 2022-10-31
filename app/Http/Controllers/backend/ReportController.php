<?php

namespace App\Http\Controllers\backend;



use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function report(){
        return view('Backend.pages.report.report');
    }
    public function form(){
        return view('Backend.pages.report.reportform');
    }
    public function store(Request $request){
        Report::create([
         'order_id'=>$request->order_id,
         'email'=>$request->email,
         'date'=>$request->date,
         'product_name'=>$request->product_name,
         'product_quantity'=>$request->product_quantity,
         'product_price'=>$request->product_price,
         'total_amount'=>$request->total_amount,
        ]);
        return redirect()->back();
    }
}
