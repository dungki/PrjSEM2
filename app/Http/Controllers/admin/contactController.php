<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user_contact;
use Carbon\Carbon;

class contactController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('checkAdmin');
    }
    function showContact(Request $request){
         if (isset($request->userid)) {
             $user_contacts = user_contact::where('user_id',$request->userid)->get();
         }else {
            $user_contacts = user_contact::get();
         }
        return view('admin.user.usercontact')->with([
            'user_contacts' => $user_contacts,
            'index' => 1
        ]);
    }
}
