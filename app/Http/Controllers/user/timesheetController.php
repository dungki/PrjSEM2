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
        
        return view('user.clock');
        }
    function addTimesheet(Request $request){
        $data = user::join('salaries','users.id','=','salaries.user_id')
        ->where('salaries.status',1)
        ->select('salaries.id','users.salary','salaries.total_salary')
        ->first();
        $amount =$request->timeWorking * $data->salary;
        timesheet::insert([
             "salary_id" => $data->id,
             "work_date" => date('Y-m-d'),
             "checkin"   =>$request->checkin,  
             "checkout"  =>$request->checkout,
             "working_time"  => $request->timeWorking,
             "amount"        =>$amount,
             "created_at"    => date('Y-m-d'),
             "updated_at"    => date('Y-m-d H:i:s'),
             "resttime" => $request->resttime
        ]);
        // salary::where('id',$data->id)
        // ->update([
        //      'total_salary' => $data->total_salary + $amount,
        //     'updated_at'    => date('Y-m-d H:i:s')
        // ]);
       return redirect()->route('clock');
   
    }
}
