<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'username' => $faker->username,
        'email' => $faker->unique()->safeEmail,
        'avatar_id' => rand(1, 10),
        'password' => bcrypt('realestate'),
        'fullname' => $faker->name,
        'role' => rand(1,3),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
