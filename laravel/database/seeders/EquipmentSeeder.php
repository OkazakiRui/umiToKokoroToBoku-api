<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\equipment;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        equipment::factory()->count(2)->create();
        
    }
}
