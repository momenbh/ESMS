<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function create(){
        return view('Backend.pages.subcategory.subcategory');
    }
    public function form(){
        return view('Backend.pages.subcategory.subcategoryform');
    }
    public function store(Request $request){

        subcategory::create([
         'subcategory_id'=>$request->subcategory_id,
         'subcategory_name'=>$request->subcategory_name,
        ]);
        return redirect()->back();
    }

}
