<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnclaimedDeposite extends Model
{
    use HasFactory;

    protected $fillable = [
         'customer_name_en',
         'customer_name_mr',
         'address_en',
         'address_mr',
         'udrn',
         'created_ip_address',
         'modified_ip_address',
         'created_by',
         'modified_by',
         'status', 
   ];


    
}
