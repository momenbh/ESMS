<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $product=Product::all();
        $category=Category::all();
        return view('Forntend.home',compact('product','category'));
    }
}
