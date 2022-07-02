<?php

namespace Database\Seeders;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        $dummyServiceTypes = [
            [
                "code" => 1001,
                "name" => "Pembersihan karburator",
                "price" => 55000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 1002,
                "name" => "Penyetelan karburator",
                "price" => 70000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 1003,
                "name" => "Pembersihan saringan udara",
                "price" => 55000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 1004,
                "name" => "Pemeriksaan dan penggantian oli",
                "price" => 30000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 1005,
                "name" => "Pembersihan busi",
                "price" => 50000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 1006,
                "name" => "Penyetelan dan pelumasan rantai roda",
                "price" => 60000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 1007,
                "name" => "Penyetelan rem depan dan belakang",
                "price" => 55000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 1008,
                "name" => "Pemeriksaan dan penambahan air aki",
                "price" => 40000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 1009,
                "name" => "Pemeriksaan lampu dan klakson",
                "price" => 35000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 2001,
                "name" => "Penyetelan dan pelumasan kabel gas",
                "price" => 15000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 2002,
                "name" => "Pemeriksaan dan penyetelan stang kemudi",
                "price" => 20000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 2003,
                "name" => "Pengencangan mur dan baut",
                "price" => 30000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 2004,
                "name" => "Pemeriksaan roda dan ban",
                "price" => 20000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 2005,
                "name" => "Penyetelan klep",
                "price" => 35000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 2006,
                "name" => "Penyetelan kopling",
                "price" => 30000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 3001,
                "name" => "Penggantian ban",
                "price" => 100000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 3002,
                "name" => "Penggantian roda",
                "price" => 250000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "code" => 3003,
                "name" => "Penggantian rantai",
                "price" => 150000,
                "created_at" => $date,
                "updated_at" => $date,
            ],
        ];

        Service::insert($dummyServiceTypes);
    }
}
