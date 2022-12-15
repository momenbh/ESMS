<?php

namespace App\Http\Controllers\forntend;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
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
    public function userlogout(){
        
        auth()->logout();
        notify()->success('logout success');
        return redirect()->back();


    }
     public function profile(){
        return view('Frontend.pages.profile');
     }
    public function updateprofile(Request $request)
    
    {
        // dd($request->all());
        $user=User::find(auth()->user()->id);
        $user->update([
            
            'name'=>$request->customer_name,
            'email'=>$request->customer_email,
            'mobile'=>$request->phone_number,
            'address'=>$request->user_address,

        ]);
        notify()->success('user profile update');
        return redirect()->back();
    }
    public function search(Request $request)
    {
    
        $searchResult=Product::where('product_name','LIKE',"%$request->search%")->get();
        
      return view('Frontend.pages.search',compact('searchResult'));
    }
    public function categorywishproducts($category_id)
    {
         $products=Product::where('category_id',$category_id)->get();
         
         return view('Frontend.pages.category_wish_product',compact('products'));
    }
    public function productview($product_id)
    {
        $product=Product::find($product_id);
        return view('Frontend.pages.productview',compact('product'));
        
    }
    public function viewBuyForm($product_id)
    {
        $product=Product::find($product_id);
        return view('Frontend.pages.buynow',compact('product'));
        
    }
       public function orderCreate(Request $request,$product_id)
       {
        Order::create([
            'user_id'=>auth()->user()->id,
            'product_id'=>$product_id,
            'receiver_name'=>$request->first_name,
            'receiver_email'=>$request->email,
        ]);
        notify()->success('Order placed Success.');
        return redirect()->route('home');
       }
      
    } 

    
    

