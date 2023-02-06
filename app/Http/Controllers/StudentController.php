<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\PDF;

class StudentController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->latest()->get();
        return view('Home.student.index',compact('students'));
    }
    public function create()
    {
        return view('Home.student.create');
    }
    public function store(Request $request)
    {
        // return $request;
        $file = $request->file('image');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('upload/student'), $filename);
        // return $filename;
        DB::table('students')->insert([
            'name' =>$request->name,
            'email' =>$request->email,
            'pass' =>$request->pass,
            'depertment' =>$request->depertment,
            'image' =>$filename,
        ]);

        return redirect()->route('student.index');
    }

    public function show($id)
    {
        $student = DB::table('students')->where('id',$id)->first();
        return view('Home.student.show',compact('student'));
    }
    public function downloadPdf($id)
    {
        $student = DB::table('students')->where('id',$id)->first();
        $pdf = PDF::loadView('Home.student.pdf',compact('student'));
        return $pdf->download('my.pdf');

        // return view('Home.student.pdf',compact('student'));
    }

}
