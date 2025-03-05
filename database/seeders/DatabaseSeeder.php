<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Budget;
use App\Models\Category;
use App\Models\SavingGoal;
use App\Models\Transaction;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Categories
        Category::factory()->count(10)->create();

        // Create Accounts
        Account::factory()->count(10)->create();

        // Create Transactions
        Transaction::factory()->count(50)->create();

        // Create Budgets
        Budget::factory()->count(10)->create();

        // Create Saving Goals
        SavingGoal::factory()->count(5)->create();
    }
}
