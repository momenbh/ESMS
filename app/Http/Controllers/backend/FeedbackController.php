<?php

namespace App\Http\Controllers\backend;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function feedback(){
        return view('Backend.pages.feedback.feedback');
    }
    public function form(){
        return view('Backend.pages.feedback.feedbackform');
    }
    public function store(Request $request){
        Feedback::create([
            'product_id'=>$request->product_id,
            'rating'=>$request->rating,
            'customer_id'=>$request->customer_id,
            'feedback_id'=>$request->feedback_id,

        ]);
        return redirect()->back();

    }
}
