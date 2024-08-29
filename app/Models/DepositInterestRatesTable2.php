<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositInterestRatesTable2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_type_en',
        'loan_type_mr',
        'interest_rate_en',
        'interest_rate_mr',
        'created_ip_address',
        'modified_ip_address',
        'created_by',
        'modified_by',
        'status', 
    ];
}
