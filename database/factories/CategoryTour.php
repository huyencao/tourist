<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    $name = $faker->sentence;
    $slug = str_slug($name, '-');

    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'status' => random_int(1,3),
        'city_id' => random_int(1,64),
        'parent_id' => random_int(1,10),
    ];
});
