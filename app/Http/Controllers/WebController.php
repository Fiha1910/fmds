<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Branch;
use App\Models\Demand;

class WebController extends Controller
{
    public function webhome(){
        $categories=Category::all();
        $branchs = Branch::all();
        return view('Frontend.pages.home',compact('categories',"branchs"));
    }


    public function registration(Request $request)
    {
        // dd($request->all());

        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users,email",
            "branch_id"=> "required|email|unique:users,branch_id",
        ]);
        User::create([
            'name'=>$request->name,
            'branch_id'=>$request->branch_id,
            'email'=>$request->customer_email,
            'contact'=>$request->customer_phone,
            'role'=>"branch",
            'image'=>$request->image,
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
    
        
    public function profile(){

        $demands = Demand::where("user_id", auth()?->user()?->id)->get();
        return view("Frontend.pages.profile",compact("demands"));
    }
    

}
