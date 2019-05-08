<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\OrderTour;
use Faker\Generator as Faker;

$factory->define(OrderTour::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,2),
        'tour_id' => rand(1,20),
        'start_day' => $faker->date(),
        'number_baby' => rand(1,10),
        'number_child' => rand(1,10),
        'number_adult' => rand(1,10),
        'total_price' => rand(100,1000),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
