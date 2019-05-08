<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => str_slug($faker->name),
        'parent_id' => rand(1,10),
        'location' => rand(1,4),
        'status' => rand(1,3),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
