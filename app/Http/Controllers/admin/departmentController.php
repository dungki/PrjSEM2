<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\department;
use App\group;
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

        group::insert([
             'department_id' => $departmentId,
             'user_id' => $userId
        ]);
        return redirect()->route('listUser');
    }
    function deleteGroup(Request $request)
    {
        $id = $request->grid;
        group::where('id',$id)->delete();
        return redirect()->route('listUser');
    }
}
