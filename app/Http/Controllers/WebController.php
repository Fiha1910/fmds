<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class WebController extends Controller
{
    public function webhome(){
        $categories=Category::all();
        return view('Frontend.pages.home',compact('categories'));
    }


    public function registration(Request $request)
    {
        // dd($request->all());
        User::create([
            'name'=>$request->customer_name,
            'email'=>$request->customer_email,
            'contact'=>$request->customer_phone,
            'role'=>$request->user,
            'image'=>$request->image,
            'status'=>$request->status,
            'password'=> bcrypt($request->customer_password),
             'role'=>'user'
         ]);
         notify()->success('registration successfull');
 
         return redirect()->back();
     
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $credentials=$request->except('_token');
        if(auth()->attempt($credentials))
        {
      notify()->success('Login success');
            return redirect()->back();
        }
        notify()->error('invalid password');
        return redirect()->back();
    }
    public function logout()
    {
        auth()->logout();
        notify()->success('logout success');
        return redirect()->back();
    }
    
        
    
    

}
