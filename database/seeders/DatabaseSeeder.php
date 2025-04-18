<?php

namespace Database\Seeders;

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
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(FeatureSeeder::class);
        // \App\Models\User::factory(10)->create();
        $this->call(ProductsTableSeeder::class);
        $this->call(SeoItemsTableSeeder::class);
        $this->call(ProductImagesTableSeeder::class);
    }
}
