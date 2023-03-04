<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DivisionController extends Controller
{
    public function index()
    {
        $divissions = Division::orderby('id', 'DESC')->get();
        return view('divission.index', compact('divissions'));
    }
    public function create()
    {
        return view('divission.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $divission = new Division();

            $divission->name = $request->name;
            $divission->save();
            return back()->with('success', 'New Record Created for Divission');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
        }
    }
}
