<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function create(){
        $category=Category::orderby('id','desc')->paginate(5);
        return view('Backend.pages.category.category',compact('category'));
    }
    public function form(){
        return view('Backend.pages.category.categoryform');
    }
    public function store(Request $request){
        Category::create([
        'category_id'=>$request->category_id,
        'category_name'=>$request->category_name,
        ]);
        return redirect()->route('create.category');
    }
    public function views($id){
        $category=Category::find($id);
        return view('Backend.pages.category.categoryview',compact('category'));
    }
    public function edit($id){
        $category=Category::find($id);
        return view('Backend.pages.category.categoryedit',compact('category'));

    }
    public function update(Request $request,$id){
        $category=Category::find($id);
        $category->update([
            'category_id'=>$request->category_id,
           'category_name'=>$request->category_name,

        ]);
        return redirect()->route('create.category');
    }
    public function delete($id){
        $category=Category::find($id)->delete();
        return redirect()->back();
    }
}
