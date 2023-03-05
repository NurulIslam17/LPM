<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApplicantController extends Controller
{
    public function index()
    {
        return view('applicants.index');
    }
    public function create()
    {
        return view('applicants.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $applicant = new Applicant();
            $applicant->applicant = $request->applicant;
            $applicant->email = $request->email;
            $applicant->phone = $request->phone;
            $applicant->father = $request->father;
            $applicant->father = $request->father;
            $applicant->mother = $request->mother;
            $applicant->nid = $request->nid;
            $applicant->division = $request->division;
            $applicant->city = $request->city;
            $applicant->area = $request->area;
            $applicant->village = $request->village;

            $file = $request->file('photo');
            $file_name = 'applicant_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('/Upload/Applicants/', $file_name);
            $applicant->photo = $file;
            $applicant->save();
            return back()->with('msg', 'New Member Added');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('err', 'Something went wrong');
        }
        return view('applicants.create');
    }
}
