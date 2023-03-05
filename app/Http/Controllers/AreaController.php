<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AreaController extends Controller
{
    public function index()
    {
        return view('area.index');
    }
    public function create()
    {
        $cities = City::where('status', 1)->get();
        return view('area.create', compact('cities'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $isExist = Area::where('city_id', $request->city_id)->where('name', $request->name)->exists();
        // dd(!$isExist);

        try {
            if ($isExist) {
                return back()->with('err', 'Area Already Exist');
            } else {
                return back()->with('err', 'New Record Created');
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('err', 'Something Went Wrong');
        }
    }
}
