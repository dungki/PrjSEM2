<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;
use App\group;
use Carbon\Carbon;
use App\salary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\role;
use App\type_user;
class userController extends Controller
{
    public function __construct()
    {
		$this->middleware('checkAdmin');
    }
    function addUser(Request $request){
        $roles = role::get();
        $type_users = type_user::get();
        return view('admin.user.adduser')->with([
            'roles'=>$roles,
            'type_users'=>$type_users
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
            ->paginate(10);
        }elseif(isset($request->s)){

            $users = user::where('name','like','%'.$request->s.'%')->paginate(10);
            
        }elseif (isset($request->filter)) {
            if ($request->filter == 2) {
                # code...
                $users = user::where('status','=',0)->paginate(10);
                $selected=2;
            }elseif ($request->filter == 1) {
                $users = user::get();
                $selected=1;
            }elseif ($request->filter == 0) {
                $users = user::where('status',1)->paginate(10);
                $selected=0;
            }
        } 
        else{
            $users = user::where('status',1)->paginate(10);
            
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

                return view('admin.user.adduser');

            }
        }
        user::insert([
            'name' =>  $request->name,
            'email'=>  $request->email,
            'password'=> Hash::make($request->password),
            'viewpass'=>$request->password,
            'created_at'=>  $currentTime,
            'updated_at'=>  $currentTime,
            'identity_cart'=>  $request->cmnd,
            'phone'=>  $request->phone,
            'gender' => $request->gender,
            'birthday'=>Carbon::parse($birthday)->format('Y-m-d'),
            'joined_at'=>  Carbon::parse($joinDay)->format('Y-m-d'),
            'address'=>  $request->address,
            'salary'=>  $request->salary,
            'type_user_id'=>  $request->type_user_id,
            'role_id'=>  $request->role_id,
            'status'=>  1
        ]);
        return redirect()->route('addSalary');
    }

    public function addSalary(Request $request)
    {
        $users= DB::table('users')
                ->orderBy('id', 'desc')
                ->first();
        DB::table('salaries')
            ->insert([
                "user_id" => $users->id,
                "status" => 1,
                "started_at" => Carbon::now(),
                "total_salary" => 0,
                "created_at" => Carbon::now() 
            ]);
            return redirect()->route('listUser');

    }
    function deleteUser(Request $request){

       if (isset($request->userid)) {
           if (Auth::id() == $request->userid) {
            return redirect()->route('listUser');
           }
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
