<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(){
        // $category = Category::all();
        $category = Category::paginate(2);
        
        return view('Backend.Page.category.category',compact('category'));
    }


    public function create(){
        return view('backend.page.category.create');
    }
    public function form(Request $request)
    {
            // dd($request->all());
            $fileName=null;
            
            if($request->hasFile('product_image'))
            {
                $fileName =date('ymdhmi').'.'.$request->file('product_image')->getClientOriginalExtension();
                $request->file('product_image')->storeAs('/uploads',$fileName);
            }
            Category::create([
                'name'=>$request->name,
                'product_type'=>$request->product_type,
                'product_image'=>$fileName

            ]);
            return redirect()->back();
}
    public function deleteproduct($product_id){
        $product=Category::find($product_id)->delete();
        return redirect ()->back()->with('meassage','Product deleted successfully');
    }

        
}
