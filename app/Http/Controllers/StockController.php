<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function list() {
        return view('backend.page.stocks');
    }

    public function form() {

            return view('backend.page.stocks_form');
    }
    
    public function form_post(Request $request) {

        // dd ($request->all());

      Stock::create([
        'price'=>$request-> price,
        'image'=>$request-> image,
        'product_quantity'=>$request-> product_quantity
      ]);
      return redirect()->back();
    //   return redirect()->route('stocks.list');
     }
        
    
}


