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
        $timesheets = new timeSheet;
        $total_salary=0;
        $data = user::join('salaries','users.id','=','salaries.user_id')
        ->where('users.id',5)
        ->where('salaries.status',1)
        ->select('salaries.id','users.salary','salaries.total_salary','users.name')
        ->first();
        $timesheets = timesheet::where('salary_id',$data->id)->get();
        foreach ($timesheets as $item) {
            $total_salary +=$item->amount;
        }
        return view('user.clock')->with([
            'data' => $data,
            'timesheets' =>$timesheets,
            'total_salary'=>$total_salary,
            'index' =>1
        ]);
        }
    function addTimesheet(Request $request){
        $mydate = new \DateTime();
		$mydate->modify('+7 hours');
        $currentDate = $mydate->format('Y-m-d');
		$currentTime = $mydate->format('Y-m-d H:i:s');
        $data = user::join('salaries','users.id','=','salaries.user_id')
        ->where('users.id',5)
        ->where('salaries.status',1)
        ->select('salaries.id','users.salary','salaries.total_salary')
        ->first();
        $timesheets = timesheet::where('salary_id',$data->id)->get();
        $total_salary = 0;
        
        $amount =$request->timeWorking * $data->salary;
    timesheet::insert([
        "salary_id" => $data->id,
        "work_date" =>$currentDate,
        "checkin"   =>$request->checkin,  
        "checkout"  =>$request->checkout,
        "working_time"  => $request->timeWorking,
        "amount"        =>$amount,
        "created_at"    => $currentTime,
        "updated_at"    => $currentTime,
        "resttime" => $request->resttime
   ]);
   foreach ($timesheets as $item) {
    $total_salary +=$item->amount;
}

        return view('user.clock')->with([
            'timesheets' => $timesheets,
            'total_salary' =>$total_salary
        ]);   
    }
}
