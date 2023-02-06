<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCOntroller extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        // return $products;
        return view('Home.product.index',compact('products'));
    }
    public function show($id)
    {
        $products = DB::table('products')->where('id',$id)->first();
        // return $products;
        return view('Home.product.show',compact('products'));
    }
}
