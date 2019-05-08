<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\TypeTour;
use Faker\Generator as Faker;

$factory->define(TypeTour::class, function (Faker $faker) {
    return [
        'tour_id' => rand(1, 20),
        'baby_price' => rand(1,10),
        'child_price' => rand(1,10),
        'adult_price' => rand(1,10),
        'tour_code' => str_random(20),
        'start_day' => $faker->date(),
        'end_day' => $faker->date(),
        'departure_day' => $faker->date(),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
