<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanceCrudController extends Controller
{
    public function index()
    {
        return view('advance_crud.index');
    }
    public function create()
    {
        return view('advance_crud.create');
    }
}
