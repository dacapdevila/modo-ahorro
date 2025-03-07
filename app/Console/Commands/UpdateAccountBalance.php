<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class UpdateAccountBalance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-account-balance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update initial_balance and balance for all accounts based on their transactions';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Starting account balance update');

        $accounts = DB::table('accounts')->get();
        $totalAccounts = $accounts->count();
        $counter = 0;

        $incomeIds = DB::table('transaction_types')
            ->whereIn('name', ['Fixed Income', 'Variable Income'])
            ->pluck('id')
            ->toArray();

        $expenseIds = DB::table('transaction_types')
            ->whereIn('name', ['Fixed Expense', 'Variable Expense'])
            ->pluck('id')
            ->toArray();


        foreach ($accounts as $account) {
            $this->info("Processing account #{$account->id} - {$account->name} ({$counter}/{$totalAccounts})");
            $counter++;

            // Assign a random initial balance (positive or negative)
            $initial_balance = rand(-5000, 5000);

            if ($account->currency == 'ARS') {
                $initial_balance = $initial_balance * 1250;
            }

            // Calculate total income and total expense using aggregated queries
            $totalIncome = DB::table('transactions')
                ->where('account_id', $account->id)
                ->whereIn('transaction_type_id', $incomeIds)
                ->sum('amount');

            $totalExpense = DB::table('transactions')
                ->where('account_id', $account->id)
                ->whereIn('transaction_type_id', $expenseIds)
                ->sum('amount');

            $balance = $initial_balance + $totalIncome - $totalExpense;

            // Update the account with the calculated balances
            DB::table('accounts')
                ->where('id', $account->id)
                ->update([
                    'initial_balance' => $initial_balance,
                    'balance' => $balance
                ]);
        }

        $this->info('All accounts updated successfully!');
        return CommandAlias::SUCCESS;
    }
}
