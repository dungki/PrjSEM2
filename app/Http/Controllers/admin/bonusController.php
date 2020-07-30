<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\salary_more;
class bonusController extends Controller
{
    function show(Request $request){
        $salary_mores=salary_more::get();
        return view('admin.bonus.bonuslist')->with([
            "index" =>1,
            "salary_mores" => $salary_mores
        ]);
    }
    function showForm(Request $request){
         
        return view('admin.bonus.addbonus');
    }
    function insert(Request $request){
        salary_more::insert([
 
            "title" => $request->title,
            "user_id"=>$request->usr_id,
            "amount"=>$request->amount,
            "num"=>$request->num,
            "created_at"=> date('Y-m-d H:i:s'),
            "updated_at" =>date('Y-m-d H:i:s')
        ]);
        return redirect()->route('show');
    }
}
