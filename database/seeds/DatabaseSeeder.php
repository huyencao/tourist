<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(TourTableSeeder::class);
        $this->call(BannerTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(CategoryNewsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(TypeTourTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(OrderTourTableSeeder::class);
    }
}
