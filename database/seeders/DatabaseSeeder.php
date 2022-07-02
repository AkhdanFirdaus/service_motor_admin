<?php

namespace Database\Seeders;

use App\Models\ServiceItem;
use App\Models\ServiceType;
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
        $this->call([
            ServiceSeeder::class,
            ItemSeeder::class,
            RoleSeeder::class,
            UsersSeeder::class,
            DiagnoseSeeder::class,
            ApprovedServiceSeeder::class,
            ServiceType::class,
            ServiceItem::class,
        ]);
    }
}
