<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\City::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'place_id' => rand(1, 64),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
