<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Media::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => str_slug($faker->name),
        'link_url' => 'Image',
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
