<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('products')->delete();

        \DB::table('products')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'گوشی موبایل اپل مدل iPhone 16 CH دو سیم کارت ظرفیت 128 گیگابایت و رم 8 گیگابایت',
                'price' => 87588000,
                'discount' => NULL,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 1000,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 2,
                'p_code' => 'dkp-138046488',
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-01 17:48:44',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'گوشی موبایل اپل مدل iPhone 13 CH دو سیم‌ کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت - نات اکتیو',
                'price' => 61800000,
                'discount' => NULL,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 100,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 2,
                'p_code' => 'dkp-13804643',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-01 18:21:58',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'گوشی موبایل سامسونگ مدل Galaxy A05s دو سیم کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت',
                'price' => 9399000,
                'discount' => NULL,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 1000,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 3,
                'p_code' => 'dkp-138046464',
                'created_at' => '2025-04-01 18:56:20',
                'updated_at' => '2025-04-01 18:56:20',
            ),

        ));


    }
}
