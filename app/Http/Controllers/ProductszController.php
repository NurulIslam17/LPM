<?php

namespace App\Http\Controllers;

use App\Models\Productimg;
use App\Models\ProductSize;
use App\Models\Productsz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductszController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('productsz.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productsz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sizes = $request->size;
        $prices = $request->price;

        try {
            DB::beginTransaction();
            $ps = DB::table('productszs')->insertGetId([
                'title' => $request->title,
                'color' => $request->color,
                'brand' => $request->brand,
            ]);
            foreach ($sizes as $key => $value) {
                ProductSize::create([
                    "productszs_id" => $ps,
                    "size" => $sizes[$key],
                    "price" => $prices[$key],
                ]);
            }
            DB::commit();
            return back()->with('msg', 'Inserted New Record');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            DB::rollBack();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productsz  $productsz
     * @return \Illuminate\Http\Response
     */
    public function show(Productsz $productsz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productsz  $productsz
     * @return \Illuminate\Http\Response
     */
    public function edit(Productsz $productsz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productsz  $productsz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productsz $productsz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productsz  $productsz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productsz $productsz)
    {
        //
    }
}
