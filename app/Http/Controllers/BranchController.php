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
        $request->validate([
            'name'=>'required',
            'contact'=>'required|numeric|min:11',
            'address'=>'required',
        ]);
        //   dd ($request->all());
        
        Branch::create([
            'name'=> $request->name,
            'contact'=>$request->contact,
            'status'=>$request->status,
            'address'=>$request->address,
            'location'=>$request->location,
            
        ]);

        return redirect()->back();
        // return redirect()->route('branches.list');
    }
    public function deletebranch($branch_id)
    {
        $branch=Branch::find($branch_id)->delete();
        return redirect()->back()->with('message','Branches deleted sucessfully');
    }
    public function editbranch($branch_id)
    {
        $branch=Branch::find($branch_id);
        return view('Backend.Page.branch.edit',compact('branch'));
    }
    public function update(Request $request,$branch_id)
    {
        $branch=Branch::find($branch_id);
        $branch->update([
            
            'name'=> $request->name,
            'contact'=>$request->contact,
            'status'=>$request->status

        ]);
        return redirect()->back();
    }
    public function branchlist($id){
        $branch= Branch::all();
        return view('Frontend.pages.branch.list',compact('branch'));
    }


}
