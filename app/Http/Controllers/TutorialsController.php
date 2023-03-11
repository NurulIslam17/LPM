<?php

namespace App\Http\Controllers;

use App\Models\Tutorials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TutorialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutorials = Tutorials::orderby('id', 'DESC')->get();
        return view('tutorial.index', compact('tutorials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tutorial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Tutorials::create([
                'title' => $request->title,
                'url' => $request->url,
            ]);
            return redirect()->route('tutorials.index')->with('msg', 'New Record Inserted');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('msg', 'Opp ! Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutorials  $tutorials
     * @return \Illuminate\Http\Response
     */
    public function show(Tutorials $tutorials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutorials  $tutorials
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutorials $tutorials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tutorials  $tutorials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutorials $tutorials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutorials  $tutorials
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutorials $tutorials)
    {
        //
    }
}
