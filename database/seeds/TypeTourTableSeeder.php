<?php

use Illuminate\Database\Seeder;

class TypeTourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\TypeTour::class, 20)->create();
    }
}
