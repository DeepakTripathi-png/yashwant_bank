<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceChargesTariff extends Model
{
    use HasFactory;

    protected $fillable = [
         'sr_no_en',
         'sr_no_mr',
         'charges_en',
         'charges_mr',
         'amount_en',
         'amount_mr',
         'remarks_en',
         'remarks_mr',
         'created_ip_address',
         'modified_ip_address',
         'created_by',
         'modified_by',
         'status',  
       ];
}
