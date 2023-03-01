<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index');
    }
    public function create()
    {
        $departments = Department::where('status',1)->get();
        // return $departments;
        return view('category.create',compact("departments"));
    }
    public function store(Request $request)
    {
        try{
            // return $request;
            $mejor = new Category();
            // return back()->with('Msg','Mejor Created for the department');

        }catch(\Throwable $th)
        {
            Log::error($th->getMessage());
            return back()->with('Msg','Insertion Failed');
        }
    }
}
