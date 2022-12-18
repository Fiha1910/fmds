<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductsController extends Controller
{
    public function list()
    {
        $product=Products::all();
        return view('Backend.Page.product.products_list',compact('product'));

    }

    public function create()
    {
        return view('Backend.Page.product.productform');

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
        Products::create([
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
        $product=Products::find($product_id)->delete();
        return redirect ()->back()->with('message','Products deleted successfully');
    }
    public function editform($product_id)
    {
        $product=Products::find($product_id);
        return view('Backend.Page.product.edit',compact('product'));
    }
    public function update(Request $request,$product_id)
    {
        $product=Products::find($product_id);
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


