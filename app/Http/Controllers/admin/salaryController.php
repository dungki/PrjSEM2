<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\salary_mores_history;
class salaryController extends Controller
{
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('checkAdmin');
    }
	
	function listSalary(Request $request){
		$salaries = DB::table('salaries')
		->join('users', 'salaries.user_id', '=', 'users.id')
		->where('salaries.status',1)
		->select('users.name','salaries.*')
		->get();
		if ($salaries == null) {
			return redirect()->route('index');
		}

		return view('admin.salary.salary')->with([
			'salaries' => $salaries,
			'index' => 1
		]);
	}
	function paySalary(Request $request){
		if (isset($request->id)) {
			$salary = DB::table('salaries')->where('id',$request->id)->first();
			$bonus = DB::table('salary_more')
			->where('user_id',$salary->user_id)
			->where('num','>',0)
			->get();
			$bo = 0;
			foreach ($bonus as $item) {
				$bo+=$item->amount;
				DB::table('salary_more')->where('id',$item->id)->update([
					'num' => $item->num - 1
				]);
				// salary_mores_history::insert([
				// 	'salary_id' => $salary->id,
				// 	'user_id' => $salary->user_id,
				// 	'title' => $item->title,
				// 	'num' => 1,
				// 	'amount' => $item->amount,
				// 	'updated_at' => Carbon::now(),
				// 	'status' => 1
				// ]);
			}
			
			
			DB::table('salaries')->where('id',$request->id)
			->update([
				'total_salary' => $salary->total_salary + $bo,
				'payBy_id' => Auth::id(),
				'status' => 0,
				'pay_day' => Carbon::now()
			]);

			$salaries=DB::table('salaries')
			->where('id',$request->id)
			->select('user_id')
			->first();

			

			DB::table('salaries')
			->insert([
				"user_id" => $salaries->user_id,
				"status" => 1,
				"started_at" => Carbon::now(),
				"total_salary" => 0,
				"created_at" => Carbon::now() 
			]);

			return redirect()->route('listSalary');
		}
	}
	function reactiveSalary(Request $request){
		if (isset($request->userid)) {
			DB::table('salaries')->where('user_id',$request->userid)
			->update([
				'status' => 0,
			]);
		}
		if (isset($request->id)) {
			DB::table('salaries')->where('id',$request->id)
			->update([
				'status' => 1,
				'pay_day' => Carbon::now()
			]);
			return redirect()->route('listSalary');
		}
	}
	function autoResetSalary(Request $request){
		DB::table('salaries')->select('id')
		->where('id','>',0)->where('status',1)

		->update([
			'payBy_id' => Auth::id(),
			'status' =>0,
			'pay_day' => Carbon::now()
		]);
		return redirect()->route('listSalary');
	}
	function listSalaryHistory(Request $request){
		$users = DB::table('users')->select('*')->get();
		$salaries = DB::table('salaries')->join('users', 'salaries.user_id', '=', 'users.id')
		->where('salaries.status',0)->select('users.name','salaries.*')->get();
		return view('admin.salary.salaryhistory')->with([
			'salaries' => $salaries,
			'users'=> $users,
			'index' => 1,
		]);
	}
}
