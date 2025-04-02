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
                'deleted_at' => '2025-04-02 16:47:05',
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-02 16:47:05',
            ),
            1 => 
            array (
                'id' => 2,
                'path' => 'wFMQ6BSoVrHUEKr5eLkjTGGhczidTSrhihW9mdMz.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => '2025-04-02 16:47:05',
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-02 16:47:05',
            ),
            2 => 
            array (
                'id' => 3,
                'path' => 'dFbBDNuiyX7NwX5nJDho3YdTCmYLnAAXBZ8Cx9di.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => '2025-04-02 16:47:05',
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-02 16:47:05',
            ),
            3 => 
            array (
                'id' => 4,
                'path' => '19nl7F5UZjg8vuCcZddfwa97qBRCwcuGHMFHqMM9.webp',
                'is_cover' => 1,
                'product_id' => 1,
                'deleted_at' => '2025-04-02 16:47:05',
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-02 16:47:05',
            ),
            4 => 
            array (
                'id' => 5,
                'path' => '7U1FOIx3N3yga7tRv2FzY9GcAyI4jUoJAOnCwSde.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => '2025-04-02 16:47:05',
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-02 16:47:05',
            ),
            5 => 
            array (
                'id' => 6,
                'path' => '4ksGcVoXpfK5M0L18m2h6jwNpcW3ZZdWhV7s408m.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => '2025-04-02 16:47:05',
                'created_at' => '2025-04-01 17:48:44',
                'updated_at' => '2025-04-02 16:47:05',
            ),
            6 => 
            array (
                'id' => 7,
                'path' => 'CvozKEB4dnZ4jRwHFHkmbceEIi3peXcIVQT9dQ03.webp',
                'is_cover' => 1,
                'product_id' => 2,
                'deleted_at' => '2025-04-02 16:47:02',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-02 16:47:02',
            ),
            7 => 
            array (
                'id' => 8,
                'path' => 'd1YsAVM0KdLHCYCq1rYPYEyr65uURzqESLEjdAgf.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => '2025-04-02 16:47:02',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-02 16:47:02',
            ),
            8 => 
            array (
                'id' => 9,
                'path' => 'qrTf3necaQO2lFBBXP9c2NJJn0t3NQ8BOIEHnuhz.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => '2025-04-02 16:47:02',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-02 16:47:02',
            ),
            9 => 
            array (
                'id' => 10,
                'path' => 'FxUXlSGzS0XXdLOkRDYLYUa4idi4OsaQTw3IKlhu.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => '2025-04-02 16:47:02',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-02 16:47:02',
            ),
            10 => 
            array (
                'id' => 11,
                'path' => 's0xmwdScJz1QJRxfuKv4dNwQDx92LwtC142ySXYm.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => '2025-04-02 16:47:02',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-02 16:47:02',
            ),
            11 => 
            array (
                'id' => 12,
                'path' => 'uwvyQV3TEygPRw56ShQgbhov1wtg31IcfX8erZx9.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => '2025-04-02 16:47:02',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-02 16:47:02',
            ),
            12 => 
            array (
                'id' => 13,
                'path' => 'L0OW1Z51skIBelpQUAquqiuuj1UY9bGUHH8gUo2i.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => '2025-04-02 16:47:02',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-02 16:47:02',
            ),
            13 => 
            array (
                'id' => 14,
                'path' => 'WQJzRnVRmZWXhBR1ijTo1SB8eDqTxL1ICzsCeMUm.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => '2025-04-02 16:47:02',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-02 16:47:02',
            ),
            14 => 
            array (
                'id' => 15,
                'path' => 'Ly3TuELhaMAJJhHbUuHKkf5HJZSZYZySZ16EgyYP.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => '2025-04-02 16:47:02',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-02 16:47:02',
            ),
            15 => 
            array (
                'id' => 16,
                'path' => 'lDR2OZpl05tbIFbsKKggbG5m2jxyTCb6q1ALxbqv.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => '2025-04-02 16:47:02',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-02 16:47:02',
            ),
            16 => 
            array (
                'id' => 17,
                'path' => 'sTocIOnHOpJAsdHiLQo8c9U2awImN4qTiHGwdTkr.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => '2025-04-02 16:47:02',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-02 16:47:02',
            ),
            17 => 
            array (
                'id' => 18,
                'path' => '00sHcCINx3TZXlXbGH04J49R9Byv9uU2a5QW7A8I.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => '2025-04-02 16:47:02',
                'created_at' => '2025-04-01 18:21:58',
                'updated_at' => '2025-04-02 16:47:02',
            ),
            18 => 
            array (
                'id' => 19,
                'path' => 'qeDSUDiwKonm3pDenHlbpPUrJttTZ0Fh3rHVh1dw.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => '2025-04-02 16:46:59',
                'created_at' => '2025-04-01 18:56:20',
                'updated_at' => '2025-04-02 16:46:59',
            ),
            19 => 
            array (
                'id' => 20,
                'path' => 'mQCdoz7ZSRL42CzaY0V62IoJL17RdEbPeAeFClqH.webp',
                'is_cover' => 1,
                'product_id' => 3,
                'deleted_at' => '2025-04-02 16:46:59',
                'created_at' => '2025-04-01 18:56:20',
                'updated_at' => '2025-04-02 16:46:59',
            ),
            20 => 
            array (
                'id' => 21,
                'path' => 'Jdx5PCDgSrAQmo2Hw9BDscYyt5R4Xt57Q19X1hDH.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => '2025-04-02 16:46:59',
                'created_at' => '2025-04-01 18:56:20',
                'updated_at' => '2025-04-02 16:46:59',
            ),
            21 => 
            array (
                'id' => 22,
                'path' => '7wuir0qiNYBikG0bTiGKhZqjnVPc36ujPHIzywtS.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => '2025-04-02 16:46:59',
                'created_at' => '2025-04-01 18:56:20',
                'updated_at' => '2025-04-02 16:46:59',
            ),
            22 => 
            array (
                'id' => 23,
                'path' => '8xBHFFVCn6hUEhbtfwrSAkpQaPCrmLujjlPJBdxi.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => '2025-04-02 16:46:59',
                'created_at' => '2025-04-01 18:56:20',
                'updated_at' => '2025-04-02 16:46:59',
            ),
            23 => 
            array (
                'id' => 24,
                'path' => 'ZamnH2XI1ik1ZuV34OsKWoHystNDBYHSsIz6i6rt.webp',
                'is_cover' => 1,
                'product_id' => 4,
                'deleted_at' => '2025-04-02 16:46:56',
                'created_at' => '2025-04-02 16:45:04',
                'updated_at' => '2025-04-02 16:46:56',
            ),
            24 => 
            array (
                'id' => 25,
                'path' => 'vORLAjBvqqHXj2jM00CSOV5NjNyHXCQjvq7J62Ym.webp',
                'is_cover' => 1,
                'product_id' => 5,
                'deleted_at' => '2025-04-02 16:46:53',
                'created_at' => '2025-04-02 16:45:56',
                'updated_at' => '2025-04-02 16:46:53',
            ),
            25 => 
            array (
                'id' => 26,
                'path' => 'uhsSLZ1lHm74Rrq7dma3AfcV8qJ6FNRF49awfuBy.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:49:43',
                'updated_at' => '2025-04-02 16:49:43',
            ),
            26 => 
            array (
                'id' => 27,
                'path' => '5IpOhIpDP8aj0gaMVo4vtkQJE9y1QZEJpXKXIPDT.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:49:43',
                'updated_at' => '2025-04-02 16:49:43',
            ),
            27 => 
            array (
                'id' => 28,
                'path' => 'vGOa3HuTCbotGkLiQGYKPZsP0mepOGCiJd9cxqGt.webp',
                'is_cover' => 1,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:49:43',
                'updated_at' => '2025-04-02 16:49:43',
            ),
            28 => 
            array (
                'id' => 29,
                'path' => 'v1SK6a0fPiPAcNlRG1KBemuUuFbpO1VsGnFP0Tra.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:49:43',
                'updated_at' => '2025-04-02 16:49:43',
            ),
            29 => 
            array (
                'id' => 30,
                'path' => 'RGkaMz2EcOlqig04AWiK5dSBQACHaMcZmSjkPVIk.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:49:43',
                'updated_at' => '2025-04-02 16:49:43',
            ),
            30 => 
            array (
                'id' => 31,
                'path' => 'BWlhk2PRKz4NGfKmMIc4lTdFRvxU5NE4odsRklTE.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:49:43',
                'updated_at' => '2025-04-02 16:49:43',
            ),
            31 => 
            array (
                'id' => 32,
                'path' => 'qfZdsEMk7qTHhEg4qDzDeYmmT5IYPVHHeyDdPMt9.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:49:43',
                'updated_at' => '2025-04-02 16:49:43',
            ),
            32 => 
            array (
                'id' => 33,
                'path' => 'Fw4xIuJgLcjshZR7tRoh0qIIF046OgkNSLsAerIo.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:49:43',
                'updated_at' => '2025-04-02 16:49:43',
            ),
            33 => 
            array (
                'id' => 34,
                'path' => 'PEGDQIIAHCr0qjL74L957eqT1O3THHsIBVUhEOv5.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:51:51',
                'updated_at' => '2025-04-02 16:51:51',
            ),
            34 => 
            array (
                'id' => 35,
                'path' => 'CcmBrPTJsQP5f59zgZOnEZ6OdCntzvWNIQ4w4QEg.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:51:51',
                'updated_at' => '2025-04-02 16:51:51',
            ),
            35 => 
            array (
                'id' => 36,
                'path' => 'LJueep8H3uGyjfpzv6U1wvRfLyXWcRiK4Z3S7Amj.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:51:51',
                'updated_at' => '2025-04-02 16:51:51',
            ),
            36 => 
            array (
                'id' => 37,
                'path' => '1BdcnJClpeVlCDBfqCrm7hcqw6GI9o5tZnmqhzlP.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:51:51',
                'updated_at' => '2025-04-02 16:51:51',
            ),
            37 => 
            array (
                'id' => 38,
                'path' => 'PHRk2ZxrRrDx7QzxS3XBHAgJPATRaRyqK5c8w9vK.webp',
                'is_cover' => 1,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:51:51',
                'updated_at' => '2025-04-02 16:51:51',
            ),
            38 => 
            array (
                'id' => 39,
                'path' => 'S5zaYagseg9iEO5kpFnxYSh4RDIOPKFBeN27xGFi.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:51:51',
                'updated_at' => '2025-04-02 16:51:51',
            ),
            39 => 
            array (
                'id' => 40,
                'path' => 'OAhr0rW7nQeFee9KLnF6Wo08K3NPagpcNnwushfQ.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:54:10',
                'updated_at' => '2025-04-02 16:54:10',
            ),
            40 => 
            array (
                'id' => 41,
                'path' => 'h82ZLdJDtR7avKtCKLdEwOZ9HhVAcEpP02xRo99Z.webp',
                'is_cover' => 1,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:54:10',
                'updated_at' => '2025-04-02 16:54:10',
            ),
            41 => 
            array (
                'id' => 42,
                'path' => '69S57cGEEKxBjnkml2ty7uGHqFwe2PB2NivZhxFg.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:54:10',
                'updated_at' => '2025-04-02 16:54:10',
            ),
            42 => 
            array (
                'id' => 43,
                'path' => 'jxc6Vg4TiinwOHAkB58SclSV7q18L38rUC7KnUWT.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:54:10',
                'updated_at' => '2025-04-02 16:54:10',
            ),
            43 => 
            array (
                'id' => 44,
                'path' => '9ixD1ea12bdUZB3qBctSoATpQL28YD0nV4CnMQXZ.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:54:10',
                'updated_at' => '2025-04-02 16:54:10',
            ),
            44 => 
            array (
                'id' => 45,
                'path' => '8EsElB56inikoJ4fkGbETYDzef3zi29e8RhVLEKB.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:54:10',
                'updated_at' => '2025-04-02 16:54:10',
            ),
            45 => 
            array (
                'id' => 46,
                'path' => 'qyRVPHFhd3CLSpeps9kZ6Yqvsw64L4nBMuEI2iCl.webp',
                'is_cover' => 0,
                'product_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:56:42',
                'updated_at' => '2025-04-02 16:56:42',
            ),
            46 => 
            array (
                'id' => 47,
                'path' => 'UtYcjhlpijjLf9gMDK2jGf1kKz6xfVOrxqMyeGI9.webp',
                'is_cover' => 0,
                'product_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:56:42',
                'updated_at' => '2025-04-02 16:56:42',
            ),
            47 => 
            array (
                'id' => 48,
                'path' => 'VR1lJkE4F4gtpguj8GBCPfGKUzY197N0WExJ3eQu.webp',
                'is_cover' => 0,
                'product_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:56:42',
                'updated_at' => '2025-04-02 16:56:42',
            ),
            48 => 
            array (
                'id' => 49,
                'path' => '3PL53pk2bqPsaPnSbMzpoJPMwEAKdOTf3WMtWKy4.webp',
                'is_cover' => 0,
                'product_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:56:42',
                'updated_at' => '2025-04-02 16:56:42',
            ),
            49 => 
            array (
                'id' => 50,
                'path' => '6KUOmmwbsJyWxX1ufG0CUwMgkx15DdHNVdUiXQcB.webp',
                'is_cover' => 1,
                'product_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:56:42',
                'updated_at' => '2025-04-02 16:56:42',
            ),
            50 => 
            array (
                'id' => 51,
                'path' => 'I3XmiiKVDuKDREQdyzVuzG8flDKQcl9MIARZUhNo.webp',
                'is_cover' => 0,
                'product_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:56:42',
                'updated_at' => '2025-04-02 16:56:42',
            ),
            51 => 
            array (
                'id' => 52,
                'path' => 'ArHmcgAyy8vyrrF57O02gFws0VnhyolzCz2V4ghM.webp',
                'is_cover' => 0,
                'product_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-04-02 16:56:42',
                'updated_at' => '2025-04-02 16:56:42',
            ),
        ));
        
        
    }
}