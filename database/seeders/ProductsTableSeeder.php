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
                'deleted_at' => '2025-04-02 16:47:05',
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-02 16:47:05',
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
                'deleted_at' => '2025-04-02 16:47:02',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-02 16:47:02',
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
                'deleted_at' => '2025-04-02 16:46:59',
                'created_at' => '2025-04-01 18:56:20',
                'updated_at' => '2025-04-02 16:46:59',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'dsfsdfsf',
                'price' => 20000,
                'discount' => NULL,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 100,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 1,
                'p_code' => 'DKP_70618639',
                'deleted_at' => '2025-04-02 16:46:56',
                'created_at' => '2025-04-02 16:45:04',
                'updated_at' => '2025-04-02 16:46:56',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ererwrw',
                'price' => 20000,
                'discount' => NULL,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 100,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 1,
                'p_code' => 'DKP_71655512',
                'deleted_at' => '2025-04-02 16:46:53',
                'created_at' => '2025-04-02 16:45:56',
                'updated_at' => '2025-04-02 16:46:53',
            ),
            5 => 
            array (
                'id' => 6,
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
                'p_code' => 'DKP_15846823',
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:49:43',
                'updated_at' => '2025-04-02 16:49:43',
            ),
            6 => 
            array (
                'id' => 7,
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
                'p_code' => 'DKP_43237387',
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:51:51',
                'updated_at' => '2025-04-02 16:51:51',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'گوشی موبایل اپل مدل iPhone 13 Pro CH دو سیم‌ کارت ظرفیت 256 گیگابایت و 6 گیگابایت رم - نات اکتیو',
                'price' => 121800000,
                'discount' => NULL,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 100,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 2,
                'p_code' => 'DKP_75384861',
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:54:10',
                'updated_at' => '2025-04-02 16:54:10',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'هدفون بلوتوثی موزیک آپولو مدل NEUTRAL P500 EARBUDS',
                'price' => 2900000,
                'discount' => NULL,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 100,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 9,
                'p_code' => 'DKP_91215308',
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:56:42',
                'updated_at' => '2025-04-02 16:56:42',
            ),
        ));
        
        
    }
}