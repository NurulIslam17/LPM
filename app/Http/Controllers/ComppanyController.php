<?php

namespace App\Http\Controllers;
use App\Models\Companies;
use App\Models\Member;
use Illuminate\Http\Request;

class ComppanyController extends Controller
{
    public function index()
    {
        $companies = Companies::latest()->get();
        return view('Home.company.index',compact('companies'));
    }
    public function show($id)
    {
        $companyInfo = Companies::find($id);
        return view('Home.company.show',compact('companyInfo'));
    }
}
