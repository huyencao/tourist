<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug'=> $faker->slug,
        'media_id' => random_int(1,20),
        'status' => rand(1,3),
        'cate_id' => rand(1,10),
        'description' => $faker->text('200'),
        'content' => $faker->text(200),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
