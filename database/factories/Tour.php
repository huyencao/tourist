<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Tour::class, function (Faker $faker) {
    $name = $faker->sentence;
    $slug = str_slug($name, '-');

    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'media_id' => random_int(1,20),
        'status' => rand(1,3),
        'cate_id' => rand(1, 10),
        'type_hotel' => rand(1, 10),
        'sale' => rand(1, 100),
        'schedule' => $faker->text(200),
        'starting_point' => $faker->text('50'),
        'destination' => $faker->text('50'),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
