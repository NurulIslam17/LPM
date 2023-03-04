<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Division;
use Illuminate\Support\Facades\Log;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::with('getDivision')->orderby('id', 'desc')->get();
        return $cities;
        $cities = City::orderby('id', 'desc')->get();
        return view('city.index', compact('cities'));
    }
    public function create()
    {
        $divissions = Division::where('status', 1)->get();
        return view('city.create', compact('divissions'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $isExist = City::where('division_id', $request->division_id)->where('name', $request->name)->exists();
            // dd($isExist);
            if (!$isExist) {
                // dd("ok");
                $city = new City();
                $city->division_id = $request->division_id;
                $city->name = $request->name;
                $city->save();
                return back()->with('msg', 'Data Inserted');
            } else {
                return back()->with('msg', 'City Exist');
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('msg', 'Something went Wrong');
        }
    }
}
