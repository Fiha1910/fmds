<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Products;
class ProductsController extends Controller
{
    public function list()
    {
        return view('Backend.Page.product.products_list');

    }
    
}
