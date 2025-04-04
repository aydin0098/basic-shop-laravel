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
                'name' => 'لپ تاپ 15.6 اینچی ایسوس مدل Vivobook 15 X1504VA-NJ104-i5 1335U-8GB DDR4-512GB SSD-TFT',
                'price' => 42000000,
                'discount' => NULL,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 100,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 6,
                'p_code' => 'DKP_63480519',
                'deleted_at' => NULL,
                'created_at' => '2025-04-03 10:42:29',
                'updated_at' => '2025-04-03 10:42:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'گوشی موبایل اپل مدل iPhone 16 CH دو سیم کارت ظرفیت 128 گیگابایت و رم 8 گیگابایت',
                'price' => 85788000,
                'discount' => NULL,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 100,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 2,
                'p_code' => 'DKP_18088186',
                'deleted_at' => NULL,
                'created_at' => '2025-04-03 10:44:42',
                'updated_at' => '2025-04-03 10:44:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'گوشی موبایل اپل مدل iPhone 13 Pro CH دو سیم‌ کارت ظرفیت 256 گیگابایت و 6 گیگابایت رم - نات اکتیو',
                'price' => 121800000,
                'discount' => NULL,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 200,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 2,
                'p_code' => 'DKP_84215877',
                'deleted_at' => NULL,
                'created_at' => '2025-04-03 10:47:28',
                'updated_at' => '2025-04-03 10:47:28',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'هدفون بلوتوثی اپل مدل AirPods 3 Wireless Charging',
                'price' => 16390000,
                'discount' => NULL,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 9,
                'p_code' => 'DKP_3403681',
                'deleted_at' => NULL,
                'created_at' => '2025-04-03 10:49:19',
                'updated_at' => '2025-04-03 10:49:19',
            ),
        ));
        
        
    }
}