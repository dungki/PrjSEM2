<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\salary_more;
use App\salary;
class bonusController extends Controller
{
    function show(Request $request){
        $salary_mores=salary_more::where('num','>',0)->get();
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
        if (isset($request->id)) {
            salary_more::where('id',$request->id)
        ->update([
 
            "title" => $request->title,
            "user_id"=>$request->usr_id,
            "amount"=>$request->amount,
            "num"=>$request->num,
            "updated_at" =>$currentTime
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
      }
        return redirect()->route('show');
    }
    function delete(Request $request){
       if (isset($request->id)) {
           # code...
           salary_more::where('id',$request->id)
           ->update([
            'num' => 0
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
}
