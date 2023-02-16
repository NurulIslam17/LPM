<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScreenshotController extends Controller
{
    public function screenshoot()
    {
        return view('Home.canva.screen');
    }
}
