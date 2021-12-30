<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        grade::factory()->count(100)->create();
    }
}
