<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;
use App\group;
use Carbon\Carbon;
use App\salary;
use Illuminate\Support\Str;
class userController extends Controller
{
    function addUser(Request $request){
        return view('admin.user.adduser')->with([
            'message' =>''
        ]);
    }
    //
    function listUser(Request $request){
        $selected='';
        if (isset($request->department)) {
            # code...
            $users = user::join('groups','users.id','=','groups.user_id')
                      ->join('departments','groups.department_id','=','departments.id')
                      ->where('departments.id',$request->department)
                      ->select('users.*')
                      ->get();
        }elseif(isset($request->s)){

                $users = user::where('name','like','%'.$request->s.'%')->get();
            
        }elseif (isset($request->filter)) {
            if ($request->filter == 2) {
                # code...
                $users = user::where('status','=',0)->get();
                $selected=2;
            }elseif ($request->filter == 1) {
                $users = user::get();
                $selected=1;
            }elseif ($request->filter == 0) {
                $users = user::where('status',1)->get();
                $selected=0;
            }
        } 
        else{
            $users = user::where('status',1)->get();
            
        }
    
        return view('admin.user.user')->with([
            'users' => $users,
            'index' => 1,
            'selected' => $selected
        ]);
    }
    function postUser(Request $request){
        $mydate = new \DateTime();
		$mydate->modify('+7 hours');
        $currentDate = $mydate->format('Y-m-d');
        $currentTime = $mydate->format('Y-m-d H:i:s');
        $birthday = $request->birthday;
        $joinDay =   $request->join_day;
        $cmnd=user::select('identity_cart','email')->get();
        foreach ($cmnd as $value) {
            if ($value->identity_cart == $request->cmnd ) {
                
                    return view('admin.user.adduser')->with([
                        'message'=>'Số chứng minh đã tồn tại'
                    ]);

            }
            if ($value->email == $request->email ) {
                
                return view('admin.user.adduser')->with([
                    'message'=>'Email đã tồn tại'
                ]);

             }
        }
        user::insert([
            'name' =>  $request->name,
            'email'=>  $request->email,
            'password'=> Hash::make($request->password),
            'created_at'=>  $currentTime,
            'updated_at'=>  $currentTime,
            'identity_cart'=>  $request->cmnd,
            'phone'=>  $request->phone,
            'birthday'=>Carbon::parse($birthday)->format('Y-m-d'),
            'joined_at'=>  Carbon::parse($joinDay)->format('Y-m-d'),
            'address'=>  $request->address,
            'salary'=>  $request->salary,
            'type_user_id'=>  $request->type_user_id,
            'role_id'=>  $request->role_id,
            'status'=>  1
        ]);
        $id = user::where('identity_cart',$request->cmnd)->select('id') ->first();
        // salary::insert([
        //     'user_id' => $id,
        //      'started_at' => $currentDate,
        //      'total_date' =>0,
        //      'total_salary'=>0,
        //      'status' => 1,
        //      'created_at' => $currentTime,
        //      'updated_day' =>$currentTime
        // ]);
        return redirect()->route('listUser');
    }
    function deleteUser(Request $request){
             if (isset($request->userid)) {
                 user::where('id',$request->userid)
                 ->update([
                       'status' =>0,
                       'password'=>Str::random()
                 ]);
                 group::insert([
                    'department_id' => 4,
                    'user_id' =>$request->userid
               ]);
               return redirect()->route('listUser');
             }
    }
    function reactivateUser(Request $request){
        if (isset($request->s)) {
            $users = user::where('name','like','%'.$request->s.'%')->where('status','=',0)->get();
        }else {
            $users = user::where('status','=',0)->get();
        }
        return view('admin.user.reactivate')->with([
            'users' => $users
        ]);
    }
    function reactivate(Request $request){

        if (isset($request->userid)) {
            group::where('user_id',$request->userid)
            ->where('department_id',4)->delete();
            user::where('id',$request->userid)->update([
                'status' => 1,
                'password' => Hash::make('12345678')
            ]);
        }
        return redirect()->route('listUser');
    }
}
