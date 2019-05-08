<?php

use Illuminate\Database\Seeder;

class OrderTourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\OrderTour::class, 10)->create();
    }
}
