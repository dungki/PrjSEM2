<?php

namespace App\Http\Controllers;

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
    function listUser(Request $request){
        if (isset($request->department)) {
            # code...
            $users = user::join('groups','users.id','=','groups.user_id')
                      ->join('departments','groups.department_id','=','departments.id')
                      ->where('departments.id',$request->department)
                      ->select('users.*')
                      ->get();
        }elseif(isset($request->s)){
             $users = user::where('name','like','%'.$request->s.'%')->get();
        } else{
            $users = user::get();
        }
        return view('admin.user.user')->with([
            'users' => $users,
            'index' => 1
        ]);
    }
}
