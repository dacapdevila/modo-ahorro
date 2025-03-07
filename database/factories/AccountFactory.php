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
        static $usedNames = [];

        $accountNames = [
            'Banco Fortuna',
            'Ahorro Seguro',
            'FinanTech Solutions',
            'Cuenta Libre',
            'Crédito Plus',
            'CashFlow Bank',
            'Inversión Dinámica',
            'Pagos Express',
            'Billetera Digital One',
            'Segura Capital',
        ];

        // Filter unused names
        $availableNames = array_diff($accountNames, $usedNames);

        // If all names were used, restart the list
        if (empty($availableNames)) {
            $usedNames = [];
            $availableNames = $accountNames;
        }

        // Select a random name and mark it as used
        $name = $this->faker->randomElement($availableNames);
        $usedNames[] = $name;

        $currencyNames = [
            'ARS',
            'USD',
        ];

        return [
            'name' => $name,
            'initial_balance' => $this->faker->randomFloat(2, 100, 50000),
            'balance' => $this->faker->randomFloat(2, 100, 50000),
            'currency' => $this->faker->randomElement($currencyNames),
        ];
    }
}
