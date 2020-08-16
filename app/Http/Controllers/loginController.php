<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function showLogin(Request $request){

        return view('lg.login');
    }
    function welcome(Request $request){

        return view('lg.welcome');
    }
}
