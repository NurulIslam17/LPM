<?php

namespace App\Http\Controllers;

use App\Models\Productimg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductimgController extends Controller
{
    public function index()
    {
        $product = Productimg::orderBy('id', 'DESC')->get();
        // return $product;
        return view('MultiImg.index', compact("product"));
    }
    public function show($id)
    {
        // $product = Productimg::with('productImages')->findOrFail($id);
        $product = Productimg::findOrFail($id);
        // return $product;
        return view('MultiImg.show', compact('product'));
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
                $productId = DB::table('productimgs')->insertGetId([
                    'name' => $request->name,
                    'code' => $request->code,
                    'price' => $request->price,
                ]);
                // dd($productId);
                foreach ($request->file('product_images') as $key => $value) {
                    $file = $value;
                    $filename = 'IMG' . $key . time() . '.' . $file->getClientOriginalExtension();
                    $file->move('upload/product_img', $filename);

                    DB::table('product_img_onlies')->insert([
                        'product_id' => $productId,
                        'img_desc' => $img_desc[$key],
                        'product_images' => $filename,
                    ]);
                }
            }
            DB::commit();
            return back()->with('msg', 'Inserted');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            Db::rollBack();
            return back();
        }
    }
}
