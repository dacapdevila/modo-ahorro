<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $initialBalance = 0;
        $balance = 0;
        $currencies = ['USD', 'ARS'];

        $names = [
            [
                'name' => 'Banco Fortuna',
                'initial_balance'=> $initialBalance,
                'balance' => $balance,
                'currency' => $currencies[array_rand($currencies)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ahorro Seguro',
                'initial_balance'=> $initialBalance,
                'balance' => $balance,
                'currency' => $currencies[array_rand($currencies)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FinanTech Solutions',
                'initial_balance' => $initialBalance,
                'balance' => $balance,
                'currency' => $currencies[array_rand($currencies)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cuenta Libre',
                'initial_balance' => $initialBalance,
                'balance' => $balance,
                'currency' => $currencies[array_rand($currencies)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Crédito Plus',
                'initial_balance' => $initialBalance,
                'balance' => $balance,
                'currency' => $currencies[array_rand($currencies)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CashFlow Bank',
                'initial_balance' => $initialBalance,
                'balance' => $balance,
                'currency' => $currencies[array_rand($currencies)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Inversión Dinámica',
                'initial_balance' => $initialBalance,
                'balance' => $balance,
                'currency' => $currencies[array_rand($currencies)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pagos Express',
                'initial_balance' => $initialBalance,
                'balance' => $balance,
                'currency' => $currencies[array_rand($currencies)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Billetera Digital One',
                'initial_balance' => $initialBalance,
                'balance' => $balance,
                'currency' => $currencies[array_rand($currencies)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Segura Capital',
                'initial_balance' => $initialBalance,
                'balance' => $balance,
                'currency' => $currencies[array_rand($currencies)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('accounts')->insert($names);
    }
}
