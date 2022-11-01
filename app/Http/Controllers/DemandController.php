<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandController extends Controller
{
    public function list(){
        return view('backend.page.demands');
    }
}
