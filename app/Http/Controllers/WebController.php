<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function webhome(){
        return view('Frontend.pages.home');
    }
}
