<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\salary_more;
use Illuminate\Support\Facades\DB;
use App\salary;
use Carbon\Carbon;
class bonusController extends Controller
{
  function show(Request $request){

    $salary_mores=salary_more::join('users','users.id','=','salary_more.user_id')
    ->where('num','>',0)->select('users.name','salary_more.*')->get();
    return view('admin.bonus.bonuslist')->with([
      "index" =>1,
      "salary_mores" => $salary_mores
    ]);
  }
  function showForm(Request $request){
   $userid= '';
   if (isset($request->userid)) {
             # code...
     $userid = $request->userid;
   }
   $data= new salary_more;
   return view('admin.bonus.addbonus')->with([
    'userid' => $userid,
    'data' =>$data
  ]);
 }
 function save(Request $request){
  $mydate = new \DateTime();
  $mydate->modify('+7 hours');

  $currentTime = $mydate->format('Y-m-d H:i:s');
  $userid =$request->usr_id;
  
  if (isset($request->id)) {
    salary_more::where('id',$request->id)
    ->update([
      "title" => $request->title,
      "user_id"=>$request->usr_id,
      "amount"=>$request->amount,
      "num"=>$request->num,
      "updated_at" =>$currentTime
    ]);
    $salary = DB::table('salaries')
    ->where('user_id',$userid)
    ->where('status',1)
    ->first();

      DB::table('salary_mores_histories')
      ->insert([
        'salary_id' => $salary->id,
        'user_id' => $salary->user_id,
        'title' => $request->title,
        'num' => $request->num,
        'amount' => $request->amount,
        'updated_at' => Carbon::now(),
        'status' => 1, //update
        'bonus_by_id' => Auth::id()
      ]);
    
  }
  else{
    salary_more::insert([

      "title" => $request->title,
      "user_id"=>$request->usr_id,
      "amount"=>$request->amount,
      "num"=>$request->num,
      "created_at"=> $currentTime,
      "updated_at" =>$currentTime
    ]);
    $salary = DB::table('salaries')
    ->where('user_id',$userid)
    ->where('status',1)
    ->first();
    
      DB::table('salary_mores_histories')
      ->insert([
        'salary_id' => $salary->id,
        'user_id' => $salary->user_id,
        'title' => $request->title,
        'num' => $request->num,
        'amount' => $request->amount,
        'updated_at' => Carbon::now(),
        'status' => 0, //insert
        'bonus_by_id' => Auth::id() 
      ]);
    
  }
  return redirect()->route('show');
}
function delete(Request $request){
  if (isset($request->id)) {
    $bonus = salary_more::where('id',$request->id) ->first();
   salary_more::where('id',$request->id)
   ->update([
    'num' => 0
  ]);

   $salary = DB::table('salaries')
    ->where('user_id',$bonus->user_id)
    ->where('status',1)
    ->first();
    
      DB::table('salary_mores_histories')
      ->insert([
        'salary_id' => $salary->id,
        'user_id' => $salary->user_id,
        'title' => $bonus->title,
        'num' => $bonus->num,
        'amount' => $bonus->amount,
        'updated_at' => Carbon::now(),
        'status' => 2, //xdelete
        'bonus_by_id' => Auth::id() 
      ]);
}
return redirect()->route('show');
}
function edit(Request $request){
  if (isset($request->id)){
    $data = salary_more::where('id',$request->id)
    ->first();
    $userid = $data->user_id;
  }


  return view('admin.bonus.addbonus')->with([
    'data' => $data,
    'userid' => $userid
  ]);
}
function bonusHistory(Request $request){
  $users = DB::table('users')->select('*')->get();
  $salary_mores_histories = DB::table('salary_mores_histories')
  ->join('users','users.id','=','salary_mores_histories.user_id')
  ->select('users.name','salary_mores_histories.*')
  ->orderBy('updated_at', 'asc')
  ->get();
  return view('admin.bonus.bonushistory')->with([
    "index" =>1,
    "users" => $users,
    "salary_mores_histories" => $salary_mores_histories
  ]);
}
}
