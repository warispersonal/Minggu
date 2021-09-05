<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserLottery;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(UserLottery::class, function (Faker $faker) {
    return [
        'lottery_id' => rand(1,111),
        'user_id' => rand(1,50000),
        'code' => 123,
        'created_at' =>  $faker->dateTimeBetween(-1, now()),
        'updated_at' => $faker->dateTimeBetween(-1, now()),
        'isCorrect' => rand(0,1),
        'ic_number' => rand(10000,50000),
    ];
});
