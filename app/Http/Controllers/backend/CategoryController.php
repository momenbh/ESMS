<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function create(){
        return view('Backend.pages.category.category');
    }
    public function form(){
        return view('Backend.pages.category.categoryform');
    }
    public function store(Request $request){
        Category::create([
        'category_id'=>$request->category_id,
        'category_name'=>$request->category_name,
        ]);
        return redirect()->back();
    }
}
