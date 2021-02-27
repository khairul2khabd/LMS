<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function _courseView()
    {
        return view('frontend.course');
    }
}
