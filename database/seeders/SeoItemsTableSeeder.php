<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeoItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seo_items')->delete();
        
        \DB::table('seo_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'لپ-تاپ-156-اینچی-ایسوس-مدل-vivobook-15-x1504va-nj104-i5-1335u-8gb-ddr4-512gb-ssd-tft',
                'meta_title' => 'قیمت و خرید لپ تاپ 15.6 اینچی ایسوس مدل Vivobook 15 X1504VA-NJ104-i5 1335U-8GB DDR4-512GB SSD-TFT',
                'meta_description' => 'خرید اینترنتی لپ تاپ 15.6 اینچی ایسوس مدل Vivobook 15 X1504VA-NJ104-i5 1335U-8GB DDR4-512GB SSD-TFT با رنگبندی نقره ای به همراه مقایسه، بررسی مشخصات و لیست قیمت امروز در فروشگاه اینترنتی دیجی‌کالا
',
                'type' => 'product',
                'ref_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-04-03 10:42:29',
                'updated_at' => '2025-04-03 10:42:29',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'گوشی-موبایل-اپل-مدل-iphone-16-ch-دو-سیم-کارت-ظرفیت-128-گیگابایت-و-رم-8-گیگابایت',
                'meta_title' => 'قیمت و خرید گوشی موبایل اپل مدل iPhone 16 CH دو سیم کارت ظرفیت 128 گیگابایت و رم 8 گیگابایت',
                'meta_description' => 'خرید اینترنتی گوشی موبایل اپل مدل iPhone 16 CH دو سیم کارت ظرفیت 128 گیگابایت و رم 8 گیگابایت با رنگبندی سبز، مشکی، آبی، سفید، صورتی به همراه مقایسه، بررسی مشخصات و لیست قیمت امروز در فروشگاه اینترنتی دیجی‌کالا
',
                'type' => 'product',
                'ref_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-04-03 10:44:42',
                'updated_at' => '2025-04-03 10:44:42',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'گوشی-موبایل-اپل-مدل-iphone-13-pro-ch-دو-سیم-کارت-ظرفیت-256-گیگابایت-و-6-گیگابایت-رم-نات-اکتیو',
                'meta_title' => 'قیمت و خرید گوشی موبایل اپل مدل iPhone 13 Pro CH دو سیم‌ کارت ظرفیت 256 گیگابایت و 6 گیگابایت رم - نات اکتیو',
                'meta_description' => 'خرید اینترنتی گوشی موبایل اپل مدل iPhone 13 Pro CH دو سیم‌ کارت ظرفیت 256 گیگابایت و 6 گیگابایت رم - نات اکتیو با رنگبندی سفید به همراه مقایسه، بررسی مشخصات و لیست قیمت امروز در فروشگاه اینترنتی دیجی‌کالا
',
                'type' => 'product',
                'ref_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-04-03 10:47:28',
                'updated_at' => '2025-04-03 10:47:28',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'هدفون-بلوتوثی-اپل-مدل-airpods-3-wireless-charging',
                'meta_title' => 'قیمت و خرید هدفون بلوتوثی اپل مدل AirPods 3 Wireless Charging',
                'meta_description' => 'خرید اینترنتی هدفون بلوتوثی اپل مدل AirPods 3 Wireless Charging با رنگبندی سفید به همراه مقایسه، بررسی مشخصات و لیست قیمت امروز در فروشگاه اینترنتی دیجی‌کالا
',
                'type' => 'product',
                'ref_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-04-03 10:49:19',
                'updated_at' => '2025-04-03 10:49:19',
            ),
        ));
        
        
    }
}