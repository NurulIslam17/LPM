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
        // $allMejor = Category::orderBy('id','DESC')->get();
        $allMejor = Category::with('department')->orderBy('department_id', 'DESC')->get();
        // return $allMejor;
        return view('category.index', compact('allMejor'));
    }
    public function create()
    {
        $departments = Department::where('status', 1)->get();
        // return $departments;
        return view('category.create', compact("departments"));
    }
    public function store(Request $request)
    {
        try {
            // return $request;
            $mejor = new Category();
            // return $mejor;
            $mejor->department_id = $request->department_id;
            $mejor->category = $request->category;
            $mejor->save();
            return back()->with('Msg', 'Mejor Created for the department');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('err', 'Insertion Failed');
        }
    }

    public function ajaxCall(Request $request)
    {
        $data['data'] = Category::where('department_id', $request->id)->where('status', 1)->get(['id', 'category']);

        return response()->json($data);
        // return $request->id;
    }
}
