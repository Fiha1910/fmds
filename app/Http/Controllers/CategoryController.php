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
            
            if($request->hasFile('image'))
            {
                $fileName =date('ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('/uploads',$fileName);
            }
            Category::create([
                'name'=>$request->name,
                'product_type'=>$request->product_type,
                'image'=>$fileName

            ]);
            return redirect()->back();
}
    public function deleteproduct($product_id){
        $product=Category::find($product_id)->delete();
        return redirect ()->back()->with('meassage','Product deleted successfully');
    }
    public function editcategory($category_id)
    {
        $category=Category::find($category_id);
        return view('backend.page.category.edit',compact('category'));
    }
        public function update(Request $request, $category_id)
        {
        $category=Category::find($category_id);
        $fileName=$category->product_image;
        if($request->hasFile('image'))
        {
            $fileName =date('ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }
        
    
        $category->update([
            'name'=>$request->name,
            'product_type'=>$request->product_type,
            'image'=>$fileName

        ]);
        return redirect()->back();

    }
    public function categorylist(){
        // $category = Category::all();
        $category = Category::paginate(2);
        
        
        return view('Backend.Page.category.category',compact('category'));
    }

    

    }

    

        

