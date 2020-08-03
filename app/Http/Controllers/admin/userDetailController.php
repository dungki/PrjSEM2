<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;
class userDetailController extends Controller
{
    //
    function show(Request $request){
        $user = $departments = '';
        if (isset($request->id)) {
            $user = user::where('id',$request->id)->first();
        $departments = user::join('groups','users.id','=','groups.user_id')
        ->join('departments','departments.id','=','groups.department_id')
        ->where('users.id',$request->id)
        ->select('departments.name','groups.id')
        ->get();
        }
        return view('admin.user.profile')->with([
           'departments' => $departments,
           'user' => $user
        ]);
    } 
}
