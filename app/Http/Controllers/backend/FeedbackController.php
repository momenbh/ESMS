<?php

namespace App\Http\Controllers\backend;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function feedback(){
        $feedback=Feedback::orderby('id','desc')->paginate(5);
        return view('Backend.pages.feedback.feedback',compact('feedback'));
    }
    public function form(){
        return view('Backend.pages.feedback.feedbackform');
    }
    public function store(Request $request){
         $request->validate([
            'product_id'=>'required|integer|min:1',
            'rating'=>'required|string',
            'customer_id'=>'required|integer|min:1',
            'feedback_id'=>'required|integer|min:1',

         ]);

        Feedback::create([
            'product_id'=>$request->product_id,
            'rating'=>$request->rating,
            'customer_id'=>$request->customer_id,
            'feedback_id'=>$request->feedback_id,

        ]);
        return redirect()->route('create.feedback');  

    }
    public function views($id){
        $feedback=Feedback::find($id);
        return view('Backend.pages.feedback.feedbackview',compact('feedback'));
    }
    public function edit($id){
        $feedback=Feedback::find($id);
        return view('Backend.pages.feedback.feedbackedit',compact('feedback'));

    }
    public function update(Request $request,$id){
        $feedback=Feedback::find($id);
        $feedback->update([
            'product_id'=>$request->product_id,
            'rating'=>$request->rating,
            'customer_id'=>$request->customer_id,
            'feedback_id'=>$request->feedback_id,
        ]);
        return redirect()->route('create.feedback');
    }
    public function delete($id){
        $feedback=Feedback::find($id)->delete();
        return redirect()->back();
    }
}
