<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Demand;
use App\Models\Products;
use Illuminate\Http\Request;

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
    public function demanddelete($demand_id)
    {
        $demand=Demand::find($demand_id)->delete();
        return redirect ()->back()->with('message','Demands deleted successfully');
    }



    public function View()
    {
        $productinfo=Products::all();
        return View('frontend.pages.demand.product', compact('productinfo'));
    }


    public function Form($id)
    {
        $branch = Branch::all();
        $product = Products::find($id);
        return View('frontend.pages.demand.orderForm',compact('branch','product'));
    }
    public function FormSubmit(Request $request,$id){
        $product = Products::find($id);
        Demand::create([
            'product_id'=> $product->id,
            'branch_id'=> $request->branch_id,
            'quantity'=> $request->quantity,
            'price'=>($request->quantity * $product->price),
            'product_type'=> $request->product_type,
            'date'=> $request->date
            
        ]);
        return to_route('home.page');
    }
    
}
