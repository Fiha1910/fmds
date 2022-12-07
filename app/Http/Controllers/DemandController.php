<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demand;

class DemandController extends Controller
{
    public function list(){
        $demand=Demand::all();
        return view('backend.page.demand.demands',compact('demand'));
    }
    public function create(){
        return view('backend.page.demand.demand_form');
    }
    public function form_details(Request $request)
    {
        Demand::create([
            'product_id'=> $request->product_id,
            'branch_id'=> $request->branch_id,
            'quantity'=> $request->quantity,
            'product_type'=> $request->product_type,
            'date'=> $request->date
            
        ]);
        return redirect()->back();

        return view('Backend.Page.demand.demand_form');
    }
    
}
