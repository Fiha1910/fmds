<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributionController extends Controller
{
    public function list(){
        return view('backend.page.distributions');
    }
}