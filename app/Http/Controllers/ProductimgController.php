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
        $product_images =  $request->product_images;

        DB::beginTransaction();
        try{
            if ($product_images) {
                foreach ($request->file('product_images') as $key => $value) {
                    // dd($key);
                    $file = $request->file('floor_image');
                    $filename = 'IMG' . $key . time() . '.' . $file[$key]->getClientOriginalExtension();
                    $file[$key]->move('upload/floor', $filename);

                    DB::table('product_img_onlies')->insert([
                        'product_id' =>1,
                        'img_desc' =>$img_desc[$key],
                        'product_images' =>$filename,
                    ]);
                }
            }

            DB::table('productimgs')->insert([
                'name' =>$request->name,
                'code' =>$request->code,
                'price' =>$request->price,
            ]);

        }catch(\Throwable $th){
            Log::error($th->getMessage());
            Db::rollBack();
        }
    }
}
