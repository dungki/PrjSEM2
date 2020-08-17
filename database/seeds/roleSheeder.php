<?php

use Illuminate\Database\Seeder;

class roleSheeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin'
        ]);
        DB::table('roles')->insert([
            'name' => 'Staff'
        ]);
        DB::table('type_users')->insert([
            'name' => 'Toàn thời gian'
        ]);
        DB::table('type_users')->insert([
            'name' => 'Bán thời gian'
        ]);
    }
}
