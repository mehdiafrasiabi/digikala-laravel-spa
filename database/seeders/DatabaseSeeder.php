<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            CitiesTableSeeder::class,
            CategoriesTableSeeder::class,
            CategoryFeaturesTableSeeder::class,
            CategoryFeatureValuesTableSeeder::class,
            SellersTableSeeder::class,
            ProductsTableSeeder::class,
            SeoItemsTableSeeder::class,
            ProductImagesTableSeeder::class,
            SlidersTableSeeder::class,
            StoriesTableSeeder::class,

        ]);
    }
}
