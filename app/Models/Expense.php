<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = [
        'name',
        'amount',
        'category',
        'date',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}
