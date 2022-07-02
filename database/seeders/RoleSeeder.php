<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        $dummyRoles = [
            [
                'name' => 'Mekanik',
                'level' => 'Kepala',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Mekanik',
                'level' => 'Anggota',
                'created_at' => $date,
                'updated_at' => $date,
            ],
        ];

        Role::insert($dummyRoles);
    }
}
