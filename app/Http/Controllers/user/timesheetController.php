<?php

namespace App\Http\Controllers\user;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\DB;
use App\timeSheet;

use App\salary;
class timesheetController extends Controller
{
    
    function clock(Request $request){
        $mydate = new \DateTime();
		$mydate->modify('+7 hours');
        $currentDate = $mydate->format('Y-m-d');
                $currentTime = $mydate->format('Y-m-d H:i:s');

        $timesheets = new timeSheet;
        // $timestamp = time();
        $timenow = ( $mydate->format('s')/60+ $mydate->format('i'))/60+ $mydate->format('H');

       $checkTimesheet =  timeSheet::join('salaries','salaries.id','=','time_sheets.salary_id')
        ->where('salaries.user_id',Auth::id())
        ->where('time_sheets.status',0)
        ->where('work_date',$currentDate)
        ->where('checkin','<',$timenow)
        ->select('time_sheets.*')
        ->first();
        $total_salary=0;
        
        $data = user::join('salaries','users.id','=','salaries.user_id')
        ->where('users.id',Auth::id())
        ->where('salaries.status',1)
        ->select('salaries.id','users.salary','salaries.total_salary','users.name')
        ->first();
        $timesheets = timesheet::where('salary_id',$data->id)->get();
        foreach ($timesheets as $item) {
            $total_salary += $item->amount;
        }
        // $salary_more = DB::table('salary_more')
        // ->join('salaries', 'salaries.user_id','=', 'salary_more.user_id')
        // ->where('user_id',Auth::id())->get();

        //Bac
        // $sum = 0;
        // $sum = $total_salary + $salary_more->amount;

        // DB::table('salaries')
        // ->where('user_id',Auth::id())
        // ->where('salaries.status',1)
        // ->update([
        //     "total_salary" => $total_salary,
        //     "updated_day" => $currentTime
        // ]);
        //endbac

        return view('user.clock')->with([
            'data' => $data,
            'timesheets' =>$timesheets,
            'total_salary'=>$total_salary,
            'index' =>1,
            'checkTimesheet' =>$checkTimesheet,
            'timenow' => $timenow
        ]);
        }
    function addCheckin(Request $request){
        $mydate = new \DateTime();
		$mydate->modify('+7 hours');
        $currentDate = $mydate->format('Y-m-d');
		$currentTime = $mydate->format('Y-m-d H:i:s');
        $data = user::join('salaries','users.id','=','salaries.user_id')
        ->where('users.id',Auth::id())
        ->where('salaries.status',1)
        ->select('salaries.id','users.salary','salaries.total_salary')
        ->first();
        timesheet::insert([
            "salary_id" => $data->id,
            "work_date" =>$currentDate,
            "checkin"   =>$request->checkin,  
            "created_at"    => $currentTime,
            "updated_at"    => $currentTime,
            "status" => 0
       ]);
       return redirect()->route('clock');

    }
    function addCheckout(Request $request){
        $mydate = new \DateTime();
		$mydate->modify('+7 hours');
        $currentDate = $mydate->format('Y-m-d');
		$currentTime = $mydate->format('Y-m-d H:i:s');
        $data = user::join('salaries','users.id','=','salaries.user_id')
        ->where('users.id',Auth::id())
        ->where('salaries.status',1)
        ->select('salaries.id','users.salary','salaries.total_salary')
        ->first();
        $amount =$request->timeWorking * $data->salary;
        if (isset($request->id)) {
            $id= $request->id;
        }
        timesheet::where('id',$id)->where('work_date',$currentDate)->update([
            "resttime" => $request->resttime,
            "amount" => $amount,
            "working_time" => $request->timeWorking,
            "checkout"   =>$request->checkout,  
            "updated_at"    => $currentTime,
            "status" => 1
       ]);
        $salary = DB::table('salaries')
        ->where('user_id',Auth::id())
        ->where('salaries.status',1)
        ->first();
        $total_salary = $salary->total_salary + $amount;
        DB::table('salaries')
        ->where('user_id',Auth::id())
        ->where('salaries.status',1)
        ->update([
            "total_salary" => $total_salary,
            "finished_at" => $currentTime,
            "updated_day" => $currentTime
        ]);
           return redirect()->route('clock');
    }
  function profile(Request $request){
        $user = user::where('id',Auth::id())->first();
    $departments = user::join('groups','users.id','=','groups.user_id')
    ->join('departments','departments.id','=','groups.department_id')
    ->where('users.id',Auth::id())
    ->select('departments.department','groups.id')
    ->get();
    
    return view('user.profile')->with([
       'departments' => $departments,
       'user' => $user
    ]);
  }



}
