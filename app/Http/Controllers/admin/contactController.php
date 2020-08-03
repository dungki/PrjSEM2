<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user_contact;
use Carbon\Carbon;

class contactController extends Controller
{
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
    function addContact(Request $request){
        $user_id = '';
        if (isset( $request->userid)) {
            # code...
            $user_id =  $request->userid;
        }
        return view('admin.user.addcontact')->with([
            'user_id' =>$user_id
        ]);
    }
    function postContact(Request $request){
        $birtday = $request->birthday;
        user_contact::insert([
            'user_id' => $request->user_id,
            'relationship' => $request->relationship,
            'name' => $request->name,
            'identity_cart' => $request->cmnd,
            'address' =>$request->address,
            'phone'=> $request->phone,
            'email' => $request->email,
            'birthday' => Carbon::parse($birtday)->format('Y-m-d')
        ]);
        return redirect()->route('showContact');
    }
}
