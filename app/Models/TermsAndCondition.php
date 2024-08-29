<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermsAndCondition extends Model
{
    use HasFactory;

    protected $fillable = [
        'description_en', 
        'description_mr', 
        'created_ip_address',
        'modified_ip_address',
         'created_by',
         'modified_by',
         'status',
   ];
}
