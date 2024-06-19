<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialReport extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'expense',
        'income',
        'description',
        'report_date',

    ];

    protected $casts = [
        'report_date' => 'date',
    ];
}
