<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            // Incomes
            [
                'name' => 'Salary',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Freelance Work',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Investments',
                'created_at' => now(),
                'updated_at' => now()],
            [
                'name' => 'Dividends',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rental Income',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bonuses',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Royalties',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Grants',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Business Revenue',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Other Income',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Expenses
            [
                'name' => 'Rent',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Utilities',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Groceries',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Transportation',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Insurance',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Healthcare',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dining Out',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Entertainment',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Subscriptions',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Clothing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Education',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Childcare',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pets',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Household Items',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Travel',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'name' => 'Gym Membership',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Streaming Services',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Car Maintenance',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Gasoline',
                'created_at' => now(),
                'updated_at' => now()]
            ,
            [
                'name' => 'Phone Bill',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'name' => 'Internet Bill',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Water Bill',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Electricity Bill',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Loan Payments',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Credit Card Payments',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Donations',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Gifts',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Taxes',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Miscellaneous',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('categories')->insert($names);
    }
}
