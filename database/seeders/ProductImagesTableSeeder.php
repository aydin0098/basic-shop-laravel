<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('product_images')->delete();

        \DB::table('product_images')->insert(array (
            0 =>
            array (
                'id' => 1,
                'path' => 'B3OQlbDXhU9NYArUMY4u1yaKw4afqo9UhbKhh4jA.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-01 17:48:44',
            ),
            1 =>
            array (
                'id' => 2,
                'path' => 'wFMQ6BSoVrHUEKr5eLkjTGGhczidTSrhihW9mdMz.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-01 17:48:44',
            ),
            2 =>
            array (
                'id' => 3,
                'path' => 'dFbBDNuiyX7NwX5nJDho3YdTCmYLnAAXBZ8Cx9di.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-01 17:48:44',
            ),
            3 =>
            array (
                'id' => 4,
                'path' => '19nl7F5UZjg8vuCcZddfwa97qBRCwcuGHMFHqMM9.webp',
                'is_cover' => 1,
                'product_id' => 1,
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-01 17:48:44',
            ),
            4 =>
            array (
                'id' => 5,
                'path' => '7U1FOIx3N3yga7tRv2FzY9GcAyI4jUoJAOnCwSde.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-01 17:48:44',
            ),
            5 =>
            array (
                'id' => 6,
                'path' => '4ksGcVoXpfK5M0L18m2h6jwNpcW3ZZdWhV7s408m.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-01 17:48:44',
            ),
            6 =>
            array (
                'id' => 7,
                'path' => 'CvozKEB4dnZ4jRwHFHkmbceEIi3peXcIVQT9dQ03.webp',
                'is_cover' => 1,
                'product_id' => 2,
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-01 18:21:58',
            ),
            7 =>
            array (
                'id' => 8,
                'path' => 'd1YsAVM0KdLHCYCq1rYPYEyr65uURzqESLEjdAgf.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-01 18:21:58',
            ),
            8 =>
            array (
                'id' => 9,
                'path' => 'qrTf3necaQO2lFBBXP9c2NJJn0t3NQ8BOIEHnuhz.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-01 18:21:58',
            ),
            9 =>
            array (
                'id' => 10,
                'path' => 'FxUXlSGzS0XXdLOkRDYLYUa4idi4OsaQTw3IKlhu.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-01 18:21:58',
            ),
            10 =>
            array (
                'id' => 11,
                'path' => 's0xmwdScJz1QJRxfuKv4dNwQDx92LwtC142ySXYm.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-01 18:21:58',
            ),
            11 =>
            array (
                'id' => 12,
                'path' => 'uwvyQV3TEygPRw56ShQgbhov1wtg31IcfX8erZx9.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-01 18:21:58',
            ),
            12 =>
            array (
                'id' => 13,
                'path' => 'L0OW1Z51skIBelpQUAquqiuuj1UY9bGUHH8gUo2i.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-01 18:21:58',
            ),
            13 =>
            array (
                'id' => 14,
                'path' => 'WQJzRnVRmZWXhBR1ijTo1SB8eDqTxL1ICzsCeMUm.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-01 18:21:58',
            ),
            14 =>
            array (
                'id' => 15,
                'path' => 'Ly3TuELhaMAJJhHbUuHKkf5HJZSZYZySZ16EgyYP.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-01 18:21:58',
            ),
            15 =>
            array (
                'id' => 16,
                'path' => 'lDR2OZpl05tbIFbsKKggbG5m2jxyTCb6q1ALxbqv.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-01 18:21:58',
            ),
            16 =>
            array (
                'id' => 17,
                'path' => 'sTocIOnHOpJAsdHiLQo8c9U2awImN4qTiHGwdTkr.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-01 18:21:58',
            ),
            17 =>
            array (
                'id' => 18,
                'path' => '00sHcCINx3TZXlXbGH04J49R9Byv9uU2a5QW7A8I.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-01 18:21:58',
            ),
            18 =>
            array (
                'id' => 19,
                'path' => 'qeDSUDiwKonm3pDenHlbpPUrJttTZ0Fh3rHVh1dw.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'created_at' => '2025-04-01 18:56:20',
                'updated_at' => '2025-04-01 18:56:20',
            ),
            19 =>
            array (
                'id' => 20,
                'path' => 'mQCdoz7ZSRL42CzaY0V62IoJL17RdEbPeAeFClqH.webp',
                'is_cover' => 1,
                'product_id' => 3,
                'created_at' => '2025-04-01 18:56:20',
                'updated_at' => '2025-04-01 18:56:20',
            ),
            20 =>
            array (
                'id' => 21,
                'path' => 'Jdx5PCDgSrAQmo2Hw9BDscYyt5R4Xt57Q19X1hDH.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'created_at' => '2025-04-01 18:56:20',
                'updated_at' => '2025-04-01 18:56:20',
            ),
            21 =>
            array (
                'id' => 22,
                'path' => '7wuir0qiNYBikG0bTiGKhZqjnVPc36ujPHIzywtS.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'created_at' => '2025-04-01 18:56:20',
                'updated_at' => '2025-04-01 18:56:20',
            ),
            22 =>
            array (
                'id' => 23,
                'path' => '8xBHFFVCn6hUEhbtfwrSAkpQaPCrmLujjlPJBdxi.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'created_at' => '2025-04-01 18:56:20',
                'updated_at' => '2025-04-01 18:56:20',
            ),
        ));


    }
}
