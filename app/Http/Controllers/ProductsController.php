<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list()
    {
        $product=Product::all();
        // dd($product);

        return view('Backend.Page.product.product_list',compact('product'));

    }

    public function create()
    {
        $category = Category::all();
        return view('Backend.Page.product.productform',compact('category'));

    }
    

    public function createform(Request $request)

    {
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'category_id'=>'required',
            'product_type'=>'required',
            'quantity'=>'required'
        ]);
        $fileName=null;
        if($request->hasFile('image'))
        {
            $fileName =date('ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }
        Product::create([
            'name'=>$request->name,
            'image'=>$fileName,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'status'=>$request->status,
            'product_type'=>$request->product_type,
            'quantity'=>$request->quantity
            

        ]);
        return redirect()->back();
       
        
        
        return view('Backend.Page.product.productform');
    }
    public function deleteform($product_id)
    {
        $product=Product::find($product_id)->delete();
        return redirect ()->back()->with('message','Products deleted successfully');
    }
    public function editform($product_id)
    {
        $product=Product::find($product_id);
        $category=Category::all();
        return view('Backend.Page.product.edit',compact('category','product'));
    }
    public function update(Request $request,$product_id)
    {
        $product=Product::find($product_id);
        $fileName=$product->image;
        if($request->hasFile('image'))
        {
            $fileName =date('ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }
        $product->update([
            'name'=>$request->name,
            'image'=>$fileName,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'status'=>$request->status,
            'product_type'=>$request->product_type,
            'quantity'=>$request->quantity
            
        ]);
        return redirect()->route("product.list");
        
    }
}


