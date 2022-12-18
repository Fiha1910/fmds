<?php

namespace App\Http\Controllers;
use App\Models\Distribution;
use Illuminate\Http\Request;

class DistributionController extends Controller
{
    public function list(){

        $distribution= Distribution::paginate(2);

        // $distribution= Distribution::all();

        return view('backend.page.distribution.distributions',compact('distribution'));
    }
    public function form_post(){
        return view('backend.page.distribution.distribution_form');
    }
    public function store(Request $request)
    {
        $request->validate([
            'demand_id'=>'required',
            'product_type'=>'required',
            'quantity'=>'required'
            
        ]);
        Distribution::create([
            "demand_id"=>$request->demand_id,
            "product_type"=>$request->product_type,
            "quantity"=>$request->quantity,
            "contact"=>$request->contact,
            "date"=>$request->date

        ]);
        return redirect()->back();

    }
    public function deletedistribute($distribute_id)
    {
        $distribution=Distribution::find($distribute_id)->delete();
        return redirect()->back()->with('message','Products deleted successfully');
    }
}
