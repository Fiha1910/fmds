<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function list(){
        return view('backend.page.report.reports');
    }
    public function store(){
        return view('backend.page.report.reports_form');
    }
}
