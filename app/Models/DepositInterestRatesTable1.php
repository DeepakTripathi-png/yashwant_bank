<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositInterestRatesTable1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'period_en',
        'period_mr',
        'general_interest_rate_en',
        'general_interest_rate_mr',
        'senior_citizens_interest_rate_en',
        'senior_citizens_interest_rate_mr',
        'created_ip_address',
        'modified_ip_address',
        'created_by',
        'modified_by',
        'status', 
    ];
}
