<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function login(){

        return view('Backend.pages.login.login');
    }
    public function dologin(Request $request){
        $credentials=$request->only('email','password');
        
        if(Auth::attempt($credentials)){

            return redirect()->route('dashboard');
        }
        else
            {
                return redirect()->back();
            }
    
        

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
