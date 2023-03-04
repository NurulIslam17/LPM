<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::orderby('id', 'DESC')->get();
        return view('department.index', compact('department'));
    }
    public function create()
    {
        return view('department.create');
    }
    public function store(Request $request)
    {
        try {
            $department = new Department();
            $department->department = $request->department;
            $department->save();
            return back()->with('Msg', 'Department Created');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back();
        }
    }
}
