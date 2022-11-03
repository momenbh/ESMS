<?php

namespace App\Http\Controllers\backend;

use App\Models\Vendor;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashbordController extends Controller
{
    public function dashboard(){
        $product=Product::all();
        $category=Category::all();
        $vendor=Vendor::all();
        return view('Backend.pages.dashboard.dashboard',compact('product','category','vendor'));
    }
}
