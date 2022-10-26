<?php

namespace App\Http\Controllers\backend;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorController extends Controller
{
    public function create(){
        return view('Backend.pages.vendor.vendor');
    }
    public function form(){
        return view('Backend.pages.vendor.vendorform');
    }
    public function store(Request $request){
        Vendor::create([
            'vendor_name'=>$request->vendor_name,
            'Product_name'=>$request->Product_name,
            'address'=>$request->address,
            'email'=>$request->email,

        ]);
        return redirect()->back();
    }
}
