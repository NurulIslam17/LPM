<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::orderby('id', 'DESC')->get();
        return view('animal.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animal.create');
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
            $file =  $request->file('image');
            $file_name = 'Animal_' . time() . '.' . $file->getClientOriginalExtension();
            Animal::Create([
                'name' => $request->name,
                'color' => $request->color,
                'price' => $request->price,
                'image' => $file_name,
            ]);
            $file->move('upload/animal/', $file_name);
            return redirect()->route('animals.index')->with('msg', 'Data Inserted');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('Msg', 'Something Went Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return $id;
        $animal = Animal::findOrFail($id);
        return view('animal.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);
        try {

            $update = [
                'name' => $request->name,
                'color' => $request->color,
                'price' => $request->price,
            ];
            if ($request->hasfile('image')) {
                $unlinkImg = 'upload/animal/' . $animal->image;
                $file =  $request->file('image');
                $file_name = 'Animal_' . time() . '.' . $file->getClientOriginalExtension();
                $update['image'] = $file_name;
                $file->move('upload/animal/', $file_name);
            }
            $animal->update($update);
            @unlink($unlinkImg);
            return redirect()->route('animals.index');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('msg', 'Something Went Wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;

        try {
            $animal = Animal::findOrFail($id);
            // dd($animal);

            if ($animal->image) {
                $deleteImg = 'upload/animal/' . $animal->image;
            }
            $animal->delete();
            @unlink($deleteImg);
            return back()->with('msg', 'Animal deletd Successfully');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('msg', 'Something went wrong');
        }
    }

    public function changeStatus(Request $request)
    {
        $data = Animal::findOrFail($request->id);
        if ($data->status == 1) {
            $data->status = 0;
            $data->save();
            $status = 0;
        } else {
            $data->status = 1;
            $data->save();
            $status = 1;
        }
        return response()->json($status);
    }
}
