<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function list(){
        return view ('backend.page.branches');
    }
    public function create(){
        return view("backend.page.branchesCreate");
    }
}
