<?php

namespace App\Models;

use Database\Factories\SavingGoalFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingGoal extends Model
{
    /** @use HasFactory<SavingGoalFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'target_amount',
        'current_amount',
        'due_date',
    ];
}
