<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\salary;
use Illuminate\Support\Facades\Auth;
use App\timeSheet;
use Illuminate\Support\Facades\DB;
class salaryController extends Controller
{
   function list(Request $request){
    if (isset($request->id)) {
        $salaries = salary::join('users','users.id','=','salaries.user_id')->where('salaries.user_id',Auth::id())
        ->where('salaries.id',$request->id)
        ->where('salaries.status',0)
        ->select('users.name','salaries.*')->get();
    }else{
        $salaries = salary::join('users','users.id','=','salaries.user_id')->where('salaries.user_id',Auth::id())->where('salaries.status',0)
    ->select('users.name','salaries.*')->get();
    }
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
   function bonusHistory(Request $request){
    $users = DB::table('users')->select('*')->get();
    $salary_mores_histories = DB::table('salary_mores_histories')
    ->join('users','users.id','=','salary_mores_histories.user_id')
    ->where('salary_mores_histories.status',9)
    ->select('users.name','salary_mores_histories.*')
    ->orderBy('updated_at', 'asc')
    ->get();
    return view('user.bonusHistory')->with([
      "index" =>1,
      "users" => $users,
      "salary_mores_histories" => $salary_mores_histories
    ]);
  }
}
