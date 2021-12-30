<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CompanySeeder;
use Database\Seeders\EquipmentSeeder;
use Database\Seeders\GradeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanySeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(EquipmentSeeder::class);
        \App\Models\User::factory(1)->create();
    }
}
