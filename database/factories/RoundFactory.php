<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Round>
 */
class RoundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'active' => $this->faker->boolean(true),
            'date_start' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'date_end' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
        ];
    }
}
