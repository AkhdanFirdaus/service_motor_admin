<?php

namespace Database\Seeders;

use App\Models\Diagnose;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DiagnoseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        $dummyDiagnoses = [
            [
                // "NO_SERVICE" => 15512001,
                "customer_id" => 9,
                "diagnose_date" => "2015-05-12",
                "nopol" => "BAWA 6122",
                "brand" => "Honda BeAT",
                "problem" => "Servis Ringan",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15512002,
                "customer_id" => 10,
                "diagnose_date" => "2015-05-12",
                "nopol" => "DKACG 3999",
                "brand" => "Honda Vario",
                "problem" => "Servis Ringan",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15512003,
                "customer_id" => 11,
                "diagnose_date" => "2015-05-12",
                "nopol" => "BGBC 4356",
                "brand" => "Honda Vario",
                "problem" => "Servis Ringan",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15512004,
                "customer_id" => 12,
                "diagnose_date" => "2015-05-12",
                "nopol" => "BAMG 6165",
                "brand" => "Honda Vario 125",
                "problem" => "Ganti Ban",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15512005,
                "customer_id" => 13,
                "diagnose_date" => "2015-05-12",
                "nopol" => "DMXJ 4939",
                "brand" => "Honda Scoopy",
                "problem" => "Servis Ringan",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15512006,
                "customer_id" => 14,
                "diagnose_date" => "2015-05-12",
                "nopol" => "FDC 5712",
                "brand" => "Yamaha Fazzio",
                "problem" => "Ganti Oli",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15512007,
                "customer_id" => 15,
                "diagnose_date" => "2015-05-12",
                "nopol" => "EASD 4885",
                "brand" => "Benelli Seta 125",
                "problem" => "Servis Ringan",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15512008,
                "customer_id" => 16,
                "diagnose_date" => "2015-05-12",
                "nopol" => "ZJJA 6201",
                "brand" => "SYM Attila Venus 125i",
                "problem" => "Servis Ringan",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15512009,
                "customer_id" => 17,
                "diagnose_date" => "2015-05-12",
                "nopol" => "BDAD 3291",
                "brand" => "Honda CRF150L",
                "problem" => "Ganti Rantai",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15512010,
                "customer_id" => 18,
                "diagnose_date" => "2015-05-12",
                "nopol" => "DRFG 6593",
                "brand" => "Honda CRF150L",
                "problem" => "Servis Ringan",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15513001,
                "customer_id" => 19,
                "diagnose_date" => "2015-05-13",
                "nopol" => "AGAWC 6651",
                "brand" => "Honda PCX160",
                "problem" => "Servis Ringan",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15513002,
                "customer_id" => 20,
                "diagnose_date" => "2015-05-13",
                "nopol" => "AEAQ 3969",
                "brand" => "Yamaha E01",
                "problem" => "Servis Ringan",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15513003,
                "customer_id" => 21,
                "diagnose_date" => "2015-05-13",
                "nopol" => "KHAG 4009",
                "brand" => "Benelli Zafferano 250",
                "problem" => "Servis Ringan",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15513004,
                "customer_id" => 22,
                "diagnose_date" => "2015-05-13",
                "nopol" => "DMAB 5477",
                "brand" => "Piaggio Medley",
                "problem" => "Servis Lengkap",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15513005,
                "customer_id" => 23,
                "diagnose_date" => "2015-05-13",
                "nopol" => "BNAJ 6978",
                "brand" => "Peugeot Django 150",
                "problem" => "Servis Ringan",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                // "NO_SERVICE" => 15513006,
                "customer_id" => 24,
                "diagnose_date" => "2015-05-13",
                "nopol" => "BMADC 4252",
                "brand" => "Vespa S",
                "problem" => "Servis Ringan",
                "created_at" => $date,
                "updated_at" => $date,
            ]
        ];


        Diagnose::insert($dummyDiagnoses);
    }
}
