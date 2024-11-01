<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Heat;
use App\Models\Lane;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Race>
 */
class RaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'heat_id' => Heat::factory(),
            'car_id' => Car::factory(),
            'lane_id' => Lane::factory(),
            'time' => fake()->randomNumber(),
            'place' => fake()->numberBetween(1, 4),
        ];
    }
}
