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
        $areas = Area::with('city:id,name')->orderby('id', 'DESC')->get();
        // return $areas;
        return view('area.index', compact('areas'));
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
                $area = new Area();
                $area->city_id = $request->city_id;
                $area->name = $request->name;
                $area->save();
                return back()->with('err', 'New Record Created');
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('err', 'Something Went Wrong');
        }
    }
}
