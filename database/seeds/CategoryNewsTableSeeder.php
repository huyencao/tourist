<?php

use Illuminate\Database\Seeder;

class CategoryNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\CategoryNews::class, 10)->create();
    }
}
