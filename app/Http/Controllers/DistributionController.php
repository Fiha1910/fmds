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
        Distribution::create([
            "name"=>$request->name,
            "date"=>$request->distribution_date,
            "address"=>$request->address,
            "contact"=>$request->contact
        ]);
        return redirect()->back();

    }
}
