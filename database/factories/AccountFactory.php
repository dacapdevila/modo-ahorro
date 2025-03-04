<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word . ' Account',
            'type' => $this->faker->randomElement(['savings', 'checking', 'investment']),
            'balance' => $this->faker->randomFloat(2, 100, 50000),
            'currency' => $this->faker->currencyCode,
        ];
    }
}
