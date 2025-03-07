<?php

namespace Database\Seeders;

use App\Console\Commands\UpdateAccountBalance;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed TransactionType
        $this->call(TransactionTypeSeeder::class);

        // Seed Accounts
        $this->call(AccountSeeder::class);

        // Seed Categories
        $this->call(CategorySeeder::class);

        // Seed TransactionType
        $this->call(TransactionSeeder::class);

        // Run command to calculate initial_balance and balance of each Account
        Artisan::call('app:update-account-balance');

        // Alternative way to create data randomly.

        // Create Categories
        // Category::factory()->count(10)->create();

        // Create Accounts
        // Account::factory()->count(10)->create();

        // Create Transactions
        // Transaction::factory()->count(50)->create();

        // Todo: add budget and saving goals feature
        // Create Budgets
        // Budget::factory()->count(10)->create();

        // Create Saving Goals
        // SavingGoal::factory()->count(5)->create();
    }
}
