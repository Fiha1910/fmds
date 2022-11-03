<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function list(){
        $branch = Branch::all();
        return view('backend.page.branches',compact('branch'));
    }
            
    public function create(){
        return view("backend.page.branchesCreate");
    }
    public function details (Request $request){
        //   dd ($request->all());
        
        Branche::create([
            'name'=> $request->name,
            'contact'=>$request->contact
            
        ]);

        return redirect()->back();
        // return redirect()->route('branches.list');
    }
}
