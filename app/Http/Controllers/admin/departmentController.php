<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class departmentController extends Controller
{
    //
    function show(Request $request){
           
        return view('admin.department.department');
    }
}
