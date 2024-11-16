<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = [
        'name',
        'math_grade',
        'science_grade',
        'english_grade',
        'spanish_grade',
    ];
}
