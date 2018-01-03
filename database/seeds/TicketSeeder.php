<?php

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void

     */

    public function run(){

    $faker= Faker\Factory::create();

    for($i=0;$i<10;$i++){

    	DB::table('tickets')->insert(
    
        [
        'title' => $faker->sentence,
        'description' => $faker->text,
        'user_id'=>1,
        'category_id'=>18
    	]
	);
    }
}

    // 
    // {	for($i=0;$i<30;$i++){
    //     DB::table('tickets')->insert([
    //     	['title' => 'Test Title',
    //     	'description'=>'Descrption goes here',
    //     	'user_id'=>1,
    //     	'category_id'=>17
    //     	],

    //     	['title' => 'Test Title',
    //     	'description'=>'Descrption goes here',
    //     	'user_id'=>1,
    //     	'category_id'=>18
    //     	],

    //     	['title' => 'Test Title',
    //     	'description'=>'Descrption goes here',
    //     	'user_id'=>3,
    //     	'category_id'=>19
    //     	],
    //     	['title' => 'Test Title',
    //     	'description'=>'Descrption goes here',
    //     	'user_id'=>3,
    //     	'category_id'=>20
    //     	],

    //     	['title' => 'Test Title',
    //     	'description'=>'Descrption goes here',
    //     	'user_id'=>3,
    //     	'category_id'=>21
    //     	],

    //     	['title' => 'Test Title',
    //     	'description'=>'Descrption goes here',
    //     	'user_id'=>4,
    //     	'category_id'=>17
    //     	]
    //     	]);
    //     }
    // }
}
