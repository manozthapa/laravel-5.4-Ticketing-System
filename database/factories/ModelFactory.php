<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    

    return [
        'title' => $faker->word
    ];
});

$factory->define(App\Ticket::class, function (Faker\Generator $faker) {
    $users=App\User::pluck('id')->toArray();
    $categories=App\Category::pluck('id')->toArray();

    return [
        'title' => $faker->sentence,
        'description' => $faker->text,
        'user_id'=>$faker->randomElement($users),
        'category_id'=>$faker->randomElement($categories)
    ];
});

$factory->define(App\Answer::class, function (Faker\Generator $faker) {
    $users=App\User::pluck('id')->toArray();
    $tickets=App\Ticket::pluck('id')->toArray();
    return [
        'answer' => $faker->text,
        'user_id' => $faker->randomElement($users),
        'ticket_id'=>$faker->randomElement($tickets)
    ];
});

