<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductimgController extends Controller
{
    public function index()
    {
        return view('MultiImg.index');
    }
    public function create()
    {
        return view('MultiImg.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $img_desc =  $request->img_desc;
        DB::beginTransaction();
        try {

            if ($request->hasFile('product_images')) {

                foreach ($request->file('product_images') as $key => $value) {
                    $file = $value;
                    $filename = 'IMG' . $key . time() . '.' . $file->getClientOriginalExtension();
                    $file->move('upload/floor', $filename);

                    DB::table('product_img_onlies')->insert([
                        'product_id' => $request->code,
                        'img_desc' => $img_desc[$key],
                        'product_images' => $filename,
                    ]);

                }
            }


            DB::table('productimgs')->insert([
                'name' => $request->name,
                'code' => $request->code,
                'price' => $request->price,
            ]);
            DB::commit();
            return back();
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            Db::rollBack();
            return back();
        }
    }
}
