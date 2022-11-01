<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome(){
        return view('welcome');
    }
    public function admin(){
       return view('backend.master');
    }
    
    }
    

