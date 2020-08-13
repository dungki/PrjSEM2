<?php

namespace App\Http\Controllers\user;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user_contact;
use Carbon\Carbon;
use App\user;
use Illuminate\Support\Facades\Hash;

class contactController extends Controller
{
    //
    function addcontact(Request $request){
        $contact = new user_contact;
        return view('user.addcontact')->with([
            'contact'=>$contact
        ]);
      }
    function showcontact(Request $request){
            $user_contacts = user_contact::where('user_id',Auth::id())->get();
        return view('user.contact')->with([
            'user_contacts' => $user_contacts,
            'index' => 1
        ]);
    }
    function postContact(Request $request){
        $birtday = $request->birthday;
        if (isset($request->id)) {
            user_contact::where('id',$request->id)->update([
                'user_id' => $request->user_id,
                'relationship' => $request->relationship,
                'name' => $request->name,
                'identity_cart' => $request->cmnd,
                'address' =>$request->address,
                'phone'=> $request->phone,
                'email' => $request->email,
                'birthday' => Carbon::parse($birtday)->format('Y-m-d')
            ]);
            return redirect()->route('userShowContact');
        }
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
        return redirect()->route('userShowContact');
    }
    function editContact(Request $request){
        $id ='';
        if (isset($request->id)) {
            $id = $request->id;
        }
        $contact =  user_contact::where('id',$id)->first();
        return view('user.addcontact')->with([
            'contact'=>$contact
        ]);
    }
    function deleteContact(Request $request){
        $id ='';
        if (isset($request->id)) {
            $id = $request->id;
        }
        user_contact::where('id',$id)->delete();
    }

    function editProfile(Request $request){
       $user = user::where('id',Auth::id())->first();
        return view('user.editProfile')->with([
                  'user' => $user
        ]);
    }
    function saveProfile(Request $request){
        $mydate = new \DateTime();
		$mydate->modify('+7 hours');
        $currentDate = $mydate->format('Y-m-d');
        $currentTime = $mydate->format('Y-m-d H:i:s');
        user::where('id',Auth::id())->update([
            'email'=>  $request->email,
            'password'=> Hash::make($request->password),
            'viewpass'=>$request->password,
            'updated_at'=>  $currentTime,
            'phone'=>  $request->phone,
            'birthday'=>Carbon::parse($request->birthday)->format('Y-m-d'),
            'address'=>  $request->address
        ]);
        return redirect()->route('profile');
    }
}
