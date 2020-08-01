<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;
use App\timeSheet;
use App\salary;
class timesheetController extends Controller
{
    
    function clock(Request $request){
        $data = user::join('salaries','users.id','=','salaries.user_id')
        ->where('salaries.status',1)
        ->select('salaries.id','users.salary','salaries.total_salary')
        ->first();
        return view('user.clock')->with([
            'data' => $data
        ]);
        }
    function addTimesheet(Request $request){
        $mydate = new \DateTime();
		$mydate->modify('+7 hours');

		$currentTime = $mydate->format('Y-m-d H:i:s');
        $data = user::join('salaries','users.id','=','salaries.user_id')
        ->where('salaries.status',1)
        ->select('salaries.id','users.salary','salaries.total_salary')
        ->first();
        $amount =$request->timeWorking * $data->salary;
        // timesheet::insert([
        //      "salary_id" => $data->id,
        //      "work_date" => date('Y-m-d'),
        //      "checkin"   =>$request->checkin,  
        //      "checkout"  =>$request->checkout,
        //      "working_time"  => $request->timeWorking,
        //      "amount"        =>$amount,
        //      "created_at"    => $currentTime,
        //      "updated_at"    => $currentTime,
        //      "resttime" => $request->resttime
        // ]);
        // $update = $data->total_salary + $amount;
        // salary::where('id',$data->id)
        // ->update([
        //     //  'total_salary' => $update,
        //     // 'updated_day'    =>$currentTime
        // ]);
       return redirect()->route('clock');
   
    }
}
