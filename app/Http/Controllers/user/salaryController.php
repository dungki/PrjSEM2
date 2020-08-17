<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\salary;
use Illuminate\Support\Facades\Auth;
use App\timeSheet;
class salaryController extends Controller
{
   function list(Request $request){
    $salaries = salary::join('users','users.id','=','salaries.user_id')->where('salaries.user_id',Auth::id())->where('salaries.status',0)
    ->select('users.name','salaries.*')->get();
    return view('user.salary')->with([
        'salaries' => $salaries
    ]);
   }
   function detail(Request $request){
       if (isset($request->salaryid)) {
        $timeSheets = timeSheet::join('salaries','salaries.id','=','time_sheets.salary_id')
        ->join('users','users.id','=','salaries.user_id')
        ->select('time_sheets.*','users.salary','users.name')
        ->where('salary_id',$request->salaryid)->get();
       }
       return view('user.salaryDetail')->with([
        'timeSheets' => $timeSheets
    ]);
   }
}
