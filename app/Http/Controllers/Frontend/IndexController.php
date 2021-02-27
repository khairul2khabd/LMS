<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HomeText;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $hometext = HomeText::orderBy('id','DESC')->get();
        return view('frontend.index', compact('hometext'));
    }
}
