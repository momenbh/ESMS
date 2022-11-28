<?php

namespace App\Http\Controllers\forntend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class webHomeController extends Controller
{
    public function registration(Request $request)

    {
    User::create([

          'name'=>$request->customer_name,
           'email'=>$request->customer_email,
           'mobile'=>$request->phone_number,
           'password'=> bcrypt($request->customer_password),
            'role'=>'customer'

    ]);
  
      
    notify()->success('registration successfully!');
      return redirect()->back();


    }
    public function userlogin(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $credentials=$request->except('_token');
        if(auth()->attempt($credentials))
        {
                 notify()->success('Login successfully');
                return redirect()->back();
        }
        else{
        notify()->error('invalid password');
        return redirect()->back();
        }
    }

    

    }
    

