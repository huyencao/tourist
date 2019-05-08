<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Place::class, 64)->create()->each(function ($place)
        {
        	$place->city()->saveMany(factory(App\Models\City::class, rand(1, 10))->create([
                'place_id' => $place->id
            ]));
        });
    }
}
