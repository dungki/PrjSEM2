<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\department;
use App\group;
use App\user;
class departmentController extends Controller
{
    //
    function show(Request $request){
        $list = department::get();
        return view('admin.department.department')->with([
            'list' => $list
        ]);
    }
    function add(Request $request)
    {
        $department = $request->department;
        department::insert([
             'name' => $department 
        ]);
        return redirect()->route('showDepartment');
    }
    function delete(Request $request)
    {
        $id = $request->id;
        department::where('id',$id)->delete();
        return redirect()->route('showDepartment');
    }
    function showGroup(Request $request){
        $departments = department::get();
        $userid ='';
        if (isset($request->userid)) {
            # code...
            $userid = $request->userid;
        }
        return view('admin.department.group')->with([
            'departments' => $departments,
            'userid' => $userid
        ]);
    }
    function setGroup(Request $request)
    {
        $departmentId = $request->department_id;
        $userId = $request->user_id;
        $groups = group::where('user_id',$userId)->get();
        $isCheck =false;
        foreach ($groups as $value) {
            if ($value->department_id == $departmentId) {
                $isCheck = true;
            break;
            }
        }
        if (!$isCheck) {
            group::insert([
                'department_id' => $departmentId,
                'user_id' => $userId
           ]);
        }
        $user = user::where('id',$userId)->first();
        $departments = user::join('groups','users.id','=','groups.user_id')
        ->join('departments','departments.id','=','groups.department_id')
        ->where('users.id',$userId)
        ->select('departments.name','groups.id')
        ->get();
        return view('admin.user.profile')->with([
            'departments' => $departments,
            'user' => $user
         ]);
    }
    function deleteGroup(Request $request)
    {
        $userId = $request->userid;
        $id = $request->grid;
        group::where('id',$id)->delete();
        $user = user::where('id',$userId)->first();
        $departments = user::join('groups','users.id','=','groups.user_id')
        ->join('departments','departments.id','=','groups.department_id')
        ->where('users.id',$userId)
        ->select('departments.name','groups.id')
        ->get();
        return view('admin.user.profile')->with([
            'departments' => $departments,
            'user' => $user
         ]);
    }
}
