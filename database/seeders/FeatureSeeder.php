<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {


        DB::table('category_features')->delete();

        DB::table('category_features')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'نوع گوشی موبایل',
                    'category_id' => 1,
                    'created_at' => '2024-10-12 15:35:09',
                    'updated_at' => '2024-10-12 15:35:09',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'دسته ‌بندی',
                    'category_id' => 1,
                    'created_at' => '2024-10-12 15:35:13',
                    'updated_at' => '2024-10-12 15:35:13',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'مدل',
                    'category_id' => 1,
                    'created_at' => '2024-10-12 15:35:15',
                    'updated_at' => '2024-10-12 15:35:15',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'زمان معرفی',
                    'category_id' => 1,
                    'created_at' => '2024-10-12 15:35:19',
                    'updated_at' => '2024-10-12 15:35:19',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'ابعاد',
                    'category_id' => 1,
                    'created_at' => '2024-10-12 15:35:21',
                    'updated_at' => '2024-10-12 15:35:21',
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'وزن',
                    'category_id' => 1,
                    'created_at' => '2024-10-12 15:35:24',
                    'updated_at' => '2024-10-12 15:35:24',
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'توضیحات بدنه',
                    'category_id' => 1,
                    'created_at' => '2024-10-12 15:35:27',
                    'updated_at' => '2024-10-12 15:37:17',
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'تعداد سیم کارت',
                    'category_id' => 1,
                    'created_at' => '2024-10-12 15:35:29',
                    'updated_at' => '2024-10-12 15:35:29',
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'نوع سیم کارت',
                    'category_id' => 1,
                    'created_at' => '2024-10-12 15:35:32',
                    'updated_at' => '2024-10-12 15:35:32',
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'تراشه',
                    'category_id' => 1,
                    'created_at' => '2024-10-12 15:35:35',
                    'updated_at' => '2024-10-12 15:35:35',
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'پردازنده‌',
                    'category_id' => 1,
                    'created_at' => '2024-10-12 15:35:39',
                    'updated_at' => '2024-10-12 15:35:39',
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'فرکانس پردازنده‌ مرکزی',
                    'category_id' => 1,
                    'created_at' => '2024-10-12 15:35:42',
                    'updated_at' => '2024-10-12 15:35:42',
                ),
        ));

        DB::table('category_feature_values')->delete();

        DB::table('category_feature_values')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'category_feature_id' => 1,
                    'value' => 'سیستم عامل iOS',
                    'created_at' => '2024-10-12 15:35:49',
                    'updated_at' => '2024-10-12 15:35:49',
                ),
            1 =>
                array (
                    'id' => 2,
                    'category_feature_id' => 2,
                    'value' => 'پرچم‌دار',
                    'created_at' => '2024-10-12 15:35:55',
                    'updated_at' => '2024-10-12 15:35:55',
                ),
            2 =>
                array (
                    'id' => 3,
                    'category_feature_id' => 3,
                    'value' => 'Galaxy S24',
                    'created_at' => '2024-10-12 15:36:01',
                    'updated_at' => '2024-10-12 15:36:33',
                ),
            3 =>
                array (
                    'id' => 4,
                    'category_feature_id' => 4,
                    'value' => '۱۴ سپتامبر ۲۰۲۱',
                    'created_at' => '2024-10-12 15:36:45',
                    'updated_at' => '2024-10-12 15:36:45',
                ),
            4 =>
                array (
                    'id' => 5,
                    'category_feature_id' => 5,
                    'value' => '۱۴۶.۷x۷۱.۵x۷.۶۵ میلی‌متر',
                    'created_at' => '2024-10-12 15:36:52',
                    'updated_at' => '2024-10-12 15:36:52',
                ),
            5 =>
                array (
                    'id' => 6,
                    'category_feature_id' => 6,
                    'value' => '۱۷۴ گرم',
                    'created_at' => '2024-10-12 15:37:01',
                    'updated_at' => '2024-10-12 15:37:01',
                ),
            6 =>
                array (
                    'id' => 7,
                    'category_feature_id' => 8,
                    'value' => 'دو عدد',
                    'created_at' => '2024-10-12 15:37:27',
                    'updated_at' => '2024-10-12 15:37:27',
                ),
            7 =>
                array (
                    'id' => 8,
                    'category_feature_id' => 9,
                    'value' => 'سایز نانو (۸.۸ × ۱۲.۳ میلی‌متر)',
                    'created_at' => '2024-10-12 15:37:35',
                    'updated_at' => '2024-10-12 15:37:35',
                ),
            8 =>
                array (
                    'id' => 9,
                    'category_feature_id' => 10,
                    'value' => 'Apple A۱۵ Bionic (۵ nm) Chipset',
                    'created_at' => '2024-10-12 15:37:46',
                    'updated_at' => '2024-10-12 15:37:46',
                ),
            9 =>
                array (
                    'id' => 10,
                    'category_feature_id' => 11,
                    'value' => '۲x GHz Avalanche + ۴x GHz Blizzard',
                    'created_at' => '2024-10-12 15:37:54',
                    'updated_at' => '2024-10-12 15:37:54',
                ),
            10 =>
                array (
                    'id' => 11,
                    'category_feature_id' => 12,
                    'value' => '۳.۳۲ - ۱.۸۲ گیگاهرتز',
                    'created_at' => '2024-10-12 15:38:06',
                    'updated_at' => '2024-10-12 15:38:06',
                ),
            11 =>
                array (
                    'id' => 12,
                    'category_feature_id' => 1,
                    'value' => 'سیستم عامل Android',
                    'created_at' => '2024-10-12 16:50:21',
                    'updated_at' => '2024-10-12 16:50:21',
                ),
        ));



    }
}
