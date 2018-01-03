<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

        	[
        		'name'=>'Admin',
        		'email'=>'admin@admin.com',
        		'password'=>bcrypt('secret'),
        		'remember_token'=>str_random(10),
        		'role'=>1
        	]

        	]);
    }
}


