<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function list(){
        return view('backend.page.stocks');
    }

}
