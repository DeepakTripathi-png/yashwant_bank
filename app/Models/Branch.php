<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;


    protected $fillable = [
        'branch_name_en', 
        'branch_name_mr', 
        'address_en', 
        'address_mr', 
        'created_ip_address',
        'modified_ip_address',
        'created_by',
        'modified_by',
        'status',
      ];


}
