<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubcategoryController extends Controller
{
    public function create(){
        $subcategory=subcategory::orderby('id','desc')->paginate(5);
        return view('Backend.pages.subcategory.subcategory',compact('subcategory'));
      
    }
    public function form(){
        return view('Backend.pages.subcategory.subcategoryform');
    }
    public function store(Request $request){

        subcategory::create([
         'subcategory_id'=>$request->subcategory_id,
         'subcategory_name'=>$request->subcategory_name,
        ]);
        return redirect()->route('create.subcategory');
    }
    public function view($id){
        $subcategory=subcategory::find($id);
        return view('Backend.pages.subcategory.subcategoryview',compact('subcategory'));
    }
    public function delete($id){
        $subcategory=subcategory::find($id)->delete($id);
        return Redirect()->back();
    }
    public function edit($id){
        $subcategory=subcategory::find($id);
        return view('Backend.pages.subcategory.subcategoryedit',compact('subcategory'));
    }
    public function update(Request $request,$id){
        $subcategory=subcategory::find($id);
        $subcategory->update([
            'subcategory_id'=>$request->subcategory_id,
            'subcategory_name'=>$request->subcategory_name,
        ]);
        return redirect()->route('create.subcategory');
    }

}
