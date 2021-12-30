<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "gradeNumber" => $this->faker->month(),
            "classNumber" => $this->faker->month(),
            "program" => $this->faker->amPm(),
            "daihyousha" => $this->faker->name(),
            "food_flag" => $this->faker->boolean(),
            "bikou" => $this->faker->realText(30),
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}
