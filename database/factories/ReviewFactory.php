<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'content' => $faker->text(200),
        'user_id' => rand(1,2),
        'tour_id' => rand(1,20),
        'star' => rand(1,5),
    ];
});
