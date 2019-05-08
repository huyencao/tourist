<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Banner;
use Faker\Generator as Faker;

$factory->define(Banner::class, function (Faker $faker) {
    $name = $faker->sentence;
    $slug = str_slug($name, '-');

    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'status' => random_int(1,3),
        'media_id' => rand(1, 10),
        'location' => rand(1, 10),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
