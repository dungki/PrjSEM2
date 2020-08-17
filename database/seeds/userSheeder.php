<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\user;
use Carbon\Carbon;

class userSheeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mydate = new \DateTime();
        $mydate->modify('+7 hours');
        $currentDate = $mydate->format('Y-m-d');
        $currentTime = $mydate->format('Y-m-d H:i:s');
        user::insert([
            'name' =>  'admin',
            'email'=>  'admin@gmail.com',
            'password'=> Hash::make('admin'),
            'viewpass'=>'admin',
            'created_at'=>  $currentTime,
            'updated_at'=>  $currentTime,
            'identity_cart'=>  '0000123456789',
            'phone'=>  '0321654987',
            'birthday'=>Carbon::parse('1998-12-18')->format('Y-m-d'),
            'joined_at'=>  Carbon::parse('2020-02-20')->format('Y-m-d'),
            'address'=>  'HN',
            'salary'=>  40000,
            'type_user_id'=>  1,
            'role_id'=>  1,
            'status'=>  1
        ]);
        return redirect()->route('addSalary');
    }
}
