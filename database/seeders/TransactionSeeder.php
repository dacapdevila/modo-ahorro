<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Category;
use App\Models\TransactionType;
use Exception;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @throws Exception
     */
    public function run(): void
    {
        $totalPerYear = 50000; // 50,000 per year
        $years = [2023, 2024];
        $batchSize = 2500;

        // Preload Account and Category IDs in memory
        $accountIds = Account::query()->pluck('id')->toArray();
        $categoryIds = Category::query()->pluck('id')->toArray();
        $transactionTypeIds = TransactionType::query()->pluck('id')->toArray();

        if (empty($accountIds) || empty($categoryIds) || empty($transactionTypeIds)) {
            throw new Exception("No accounts or categories or transaction types available for transactions.");
        }

        foreach ($years as $year) {
            for ($month = 1; $month <= 12; $month++) {
                $faker = Factory::create(); // Reset Faker every month
                $transactions = [];

                for ($i = 0; $i < ($totalPerYear / 12); $i++) {
                    // Generate random date as a string to avoid Carbon memory issues
                    $date = sprintf('%d-%02d-%02d %02d:%02d:%02d',
                        $year, $month, rand(1, 28), rand(0, 23), rand(0, 59), rand(0, 59)
                    );
                    $transaction_date = substr($date, 0, 10);

                    $transactions[] = [
                        'account_id' => $accountIds[array_rand($accountIds)],
                        'category_id' => $categoryIds[array_rand($categoryIds)],
                        'transaction_type_id' => $transactionTypeIds[array_rand($transactionTypeIds)],
                        'amount' => $faker->randomFloat(2, 5, 5000),
                        'description' => $faker->sentence(),
                        'transaction_date' => $transaction_date,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ];

                    // Insert every 2,500 transactions and free memory
                    if (count($transactions) >= $batchSize) {
                        DB::table('transactions')->insert($transactions);
                        unset($transactions); // Free memory
                        $transactions = []; // Reset array
                        gc_collect_cycles(); // Force garbage collection
                    }
                }

                // Insert remaining transactions
                if (!empty($transactions)) {
                    DB::table('transactions')->insert($transactions);
                    unset($transactions);
                    gc_collect_cycles();
                }
            }
        }
    }
}
