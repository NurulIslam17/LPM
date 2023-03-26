<?php

namespace App\Http\Controllers;

use App\Models\AjaxCrud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AjaxCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ajaxDatas = AjaxCrud::orderby('id', 'DESC')->get();
        return view('ajax-crud.index', compact('ajaxDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajax-crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AjaxCrud  $ajaxCrud
     * @return \Illuminate\Http\Response
     */
    public function show(AjaxCrud $ajaxCrud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AjaxCrud  $ajaxCrud
     * @return \Illuminate\Http\Response
     */
    public function edit(AjaxCrud $ajaxCrud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AjaxCrud  $ajaxCrud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AjaxCrud $ajaxCrud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AjaxCrud  $ajaxCrud
     * @return \Illuminate\Http\Response
     */
    public function destroy(AjaxCrud $ajaxCrud)
    {
        //
    }


    public function save(Request $request)
    {
        try {

            // $file =  $request->image;
            // $fileName = "Img" . time() . '.' . $file->getClientOriginalExtension();
            // $file->move('upload/ajax-crud/', $fileName);
            // return response()->json($fileName);
            AjaxCrud::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'city' => $request->city,
                // 'image' => $fileName,
            ]);
            return response()->json(['status' => 1]);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(['status' => 0]);
        }
    }
    public function delete(Request $request)
    {
        try {

            $data = AjaxCrud::findOrFail($request->id);
            if ($data) {
                $data->delete();
                return response()->json(['status' => 1]);
            } else {
                return response()->json(['status' => 0]);
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(['status' => 0]);
        }
    }
}
