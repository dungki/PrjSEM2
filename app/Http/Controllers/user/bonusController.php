<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\salary_more;
class bonusController extends Controller
{
    public function show(Request $request)
    {
    	 $salary_mores=salary_more::join('users', 'users.id', '=', 'salary_more.user_id')->
    	 select('salary_more.*' ,'users.name')->
         where('num','>',0)->
         where('users.id',Auth::id())->get();
       	 return view('user.bonuslist')->with([
            "salary_mores" => $salary_mores
        ]);
    }
}
