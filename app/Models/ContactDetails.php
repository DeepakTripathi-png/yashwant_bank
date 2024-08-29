<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    use HasFactory;

    protected $fillable = [
          'map_url', 
         'first_mobile', 
         'second_mobile', 
         'first_email', 
         'second_email', 
          'address_en', 
          'address_mr', 
         'created_ip_address',
         'modified_ip_address',
         'created_by',
         'modified_by',
         'status',
      ];
}
