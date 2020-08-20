<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;
use App\role;
class userDetailController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('checkAdmin');
    }
    //
    function show(Request $request){
        $user = $departments = '';
        $roles = role::get();
        if (isset($request->id)) {
            $user = user::where('id',$request->id)->first();
        $departments = user::join('groups','users.id','=','groups.user_id')
        ->join('departments','departments.id','=','groups.department_id')
        ->where('users.id',$request->id)
        ->select('departments.department','groups.id')
        ->get();
        }
        return view('admin.user.profile')->with([
           'departments' => $departments,
           'user' => $user,
           'roles' => $roles
        ]);
    } 
}
