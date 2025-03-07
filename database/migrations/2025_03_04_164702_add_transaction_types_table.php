<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('transaction_types')) {
            return;
        }
        Schema::create('transaction_types', function (Blueprint $table) {
            $table->id();
            $table->enum('name', [
                'Fixed Income',
                'Variable Income',
                'Fixed Expense',
                'Variable Expense',
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (!Schema::hasTable('transaction_types')) {
            return;
        }
        Schema::dropIfExists('transaction_types');
    }
};
