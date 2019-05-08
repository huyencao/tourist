<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\CategoryNews;
use Faker\Generator as Faker;

$factory->define(CategoryNews::class, function (Faker $faker) {
    $name = $faker->sentence;
    $slug = str_slug($name, '-');

    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'status' => random_int(1,3),
        'parent_id' => random_int(1,10),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
