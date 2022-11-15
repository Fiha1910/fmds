<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('Backend.Page.login');
    }
    public function doLogin(Request $req){

        $cradentials = $req->except("_token");
        Auth::attempt($cradentials);

        if(auth()->user()){
            return redirect()->route("admin");
        }
        else{
            return redirect()->back()->with("message","Login Unsuccessfull");
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
