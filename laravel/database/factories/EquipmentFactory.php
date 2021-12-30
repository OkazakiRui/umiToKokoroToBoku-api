<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "classId" => 1,
            "bihinmei" => "bihinn ga hairu",
            "hokanbasho" => "taiiku souko",
            "bikou" => "nashi",
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}
