<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SavingGoal>
 */
class SavingGoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Goal ' . $this->faker->word,
            'target_amount' => $this->faker->randomFloat(2, 500, 20000),
            'current_amount' => $this->faker->randomFloat(2, 0, 10000),
            'due_date' => $this->faker->dateTimeBetween('+1 month', '+2 years'),
        ];
    }
}
