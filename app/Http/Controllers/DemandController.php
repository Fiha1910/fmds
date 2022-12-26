<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Demand;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DemandController extends Controller
{
    public function list(){
        $demand=Demand::with('branch','product')->get();
        return view('backend.page.demand.demands',compact('demand'));
    }
    public function create(){
        $branch = Branch::all();
        $product = Products::all();
        return view('backend.page.demand.demand_form',compact('branch','product'));
    }
    public function form_details(Request $request)
    {
       
        $request->validate([
            'product_id'=>'required',
            'branch_id'=>'required',
            'product_type'=>'required'
        ]);

        Demand::create([
            'product_id'=> $request->product_id,
            'branch_id'=> $request->branch_id,
            'quantity'=> $request->quantity,
            'product_type'=> $request->product_type,
            'date'=> $request->date,
            'user_id'=> auth()->user()->id
            
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
        // dd($product);
        return View('frontend.pages.demand.orderForm',compact('branch','product'));
    }
    public function FormSubmit(Request $request,$id){
        $product = Products::find($id);

        Demand::create([
            "user_id"=> auth()->user()->id,
            'product_id'=> $product->id,
            'branch_id'=> $request->branch_id,
            'quantity'=> $request->quantity,
            'price'=>($request->quantity * $product->price),
            'product_type'=> $request->product_type,
            'date'=> $request->date
            
        ]);
        return to_route('home.page');
    }
    public function report(Request $request)
    { 
        $validator = Validator::make($request->all(), [
        'from_date'    => 'required|date|before:now',
        'to_date'      => 'required|date|after:from_date',
    ]);

    if($validator->fails())
    {
//            notify()->error($validator->getMessageBag());
        notify()->error('From date and to date required and to should greater then from date.');
        $demands=Demand::get();
        return view('backend.page.report.report',compact('demands'));
    }



   $from=$request->from_date;
   $to=$request->to_date;


//       $status=$request->status;

    $demands=Demand::whereBetween('date', [$from, $to])->get();
    // dd($demands);
    return view('backend.page.report.report',compact('demands'));
    
    }
}

    

