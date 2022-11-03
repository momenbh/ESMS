<?php

namespace App\Http\Controllers\backend;



use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function report(){
        $report=Report::orderby('id','desc')->paginate(5);
        return view('Backend.pages.report.report',compact('report'));
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
        return redirect()->route('create.report');
    }
    public function delete($id){
        $report=Report::find($id)->delete();
        return redirect()->back();
    }
    public function view($id){
        $report=Report::find($id);
        return view('Backend.pages.report.reportview',compact('report'));
    }
    public function edit($id){
        $report=Report::find($id);
        return view('Backend\pages\report\reportedit',compact('report'));
    }
    public function update(Request $request,$id){
        $report=Report::find($id);
        $report->update([
            'order_id'=>$request->order_id,
            'email'=>$request->email,
            'date'=>$request->date,
            'product_name'=>$request->product_name,
            'product_quantity'=>$request->product_quantity,
            'product_price'=>$request->product_price,
            'total_amount'=>$request->total_amount,
        ]);
        return redirect()->route('create.report');
    }
}
