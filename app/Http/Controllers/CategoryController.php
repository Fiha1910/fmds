<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(){
        return view('Backend.Page.category');
    }
    public function create(){
        return view('backend.page.create');
    }
    public function form(Request $request)
    {
           // dd($request->all());
           Category ::create([
                'name'=>$request->name,
                'product_type'=>$request->product_type,
                'product_image'=>$request->product_image
           ]);
           return redirect()->back();
    }
}
