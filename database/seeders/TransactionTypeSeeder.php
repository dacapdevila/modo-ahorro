<?php

namespace Database\Seeders;

use App\Models\TransactionType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            [
                'name' => 'Fixed Income',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Variable Income',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fixed Expense',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Variable Expense',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('transaction_types')->insert($names);
    }
}
