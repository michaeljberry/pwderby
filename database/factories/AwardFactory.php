<?php

namespace Database\Factories;

use App\Enums\AwardType;
use App\Enums\AwardCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Award>
 */
class AwardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(AwardType::cases())->value,
            'category' => fake()->randomElement(AwardCategory::cases())->value,
        ];
    }
}
