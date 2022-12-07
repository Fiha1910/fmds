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
    
}
