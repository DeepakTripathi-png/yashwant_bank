<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCharges extends Model
{
    use HasFactory;

       
    protected $fillable = [

        'sr_no_en',
        'sr_no_mr',
        'particular_en',
        'particular_mr',
        'commission_with_gst_en',
        'commission_with_gst_mr',
        'created_ip_address',
        'modified_ip_address',
        'created_by',
        'modified_by',
         'status', 
       ];
}
