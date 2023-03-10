<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Facalty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    public function index()
    {
        // $facalties = DB::table('facalties')
        //     ->join('departments', 'departments.id', 'facalties.department_id')
        //     ->join('categories', 'categories.id', 'facalties.category_id')
        //     ->select('facalties.*', 'departments.department', 'categories.category')->get();

        $facalties = Facalty::with('departments:id,department')->with('category:id,category')->orderBy('created_at', 'ASC')->get();
        // return $facalties;
        return view('facalty.index', compact('facalties'));
    }
    public function create()
    {
        $department = Department::where('status', 1)->get();
        // return $department;
        return view('facalty.create', compact("department"));
    }
    public function store(Request $request)
    {
        try {

            if (Facalty::where('department_id', $request->department_id)->where('category_id', $request->category_id)->exists()) {
                return back()->with('Msg', 'Already Mejor exists under this Department');
            } else {
                $facalty = new Facalty();

                $facalty->department_id    = $request->department_id;
                $facalty->category_id    = $request->category_id;
                $facalty->employee    = $request->employee;
                $facalty->email    = $request->email;
                $facalty->phone    = $request->phone;
                $facalty->description    = $request->description;

                $file = $request->file('image');
                $file_name = "Facalty_" . time() . "." . $file->getClientOriginalExtension();
                $file->move("upload/facalties/", $file_name);
                $facalty->image    = $file_name;
                $facalty->save();
                return redirect()->route('manage_employee');
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with("Msg", "Record Inseted Failed");
        }
    }
}
