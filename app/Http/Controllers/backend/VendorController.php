<?php

namespace App\Http\Controllers\backend;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorController extends Controller
{
    public function create(){
        $vendor=Vendor::orderby('id','desc')->paginate(5);
        return view('Backend.pages.vendor.vendor',compact('vendor'));
    }
    public function form(){
        return view('Backend.pages.vendor.vendorform');
    }
    public function store(Request $request){
        $request->validate([
            'vendor_name'=>'required|string',
            'Product_name'=>'required|string',
            'address'=>'required|string',
            'email'=>'required|string',
        ]);

        Vendor::create([
            'vendor_name'=>$request->vendor_name,
            'Product_name'=>$request->Product_name,
            'address'=>$request->address,
            'email'=>$request->email,
        ]);

        return redirect()->route('vendor.create');
    }
    public function view($id){
        $vendor=Vendor::find($id);
        return view('Backend\pages\vendor\vendorview',compact('vendor'));
    }
    public function delete($id){
        $vendor=Vendor::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $vendor=Vendor::find($id);
        return view('Backend.pages.vendor.vendoredit',compact('vendor'));
    }
    public function update(Request $request,$id){
        $vendor=Vendor::find($id);
        $vendor->update([
            'vendor_name'=>$request->vendor_name,
            'Product_name'=>$request->Product_name,
            'address'=>$request->address,
            'email'=>$request->email,

        ]);
        return redirect()->route('vendor.create');
    }
}
