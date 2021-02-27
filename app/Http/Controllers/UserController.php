<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //User Login
    public function Userlogin(){
       return view('user.home');
    }

}
