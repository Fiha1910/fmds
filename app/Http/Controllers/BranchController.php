<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function list(){
        $branch = Branch::all();
        return view('backend.page.branch.branches',compact('branch'));
    }
            
    public function create(){
        return view("backend.page.branch.branchesCreate");
    }
    public function details (Request $request){
        //   dd ($request->all());
        
        Branch::create([
            'name'=> $request->name,
            'contact'=>$request->contact,
            'status'=>$request->status
            
        ]);

        return redirect()->back();
        // return redirect()->route('branches.list');
    }
}
