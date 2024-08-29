<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeServiceSection extends Model
{
    use HasFactory;


    protected $fillable = [
         'heading_1_en',
         'heading_1_mr',
         'heading_2_en',
         'heading_2_mr',
         'description_en',
         'description_mr',
         'created_ip_address',
         'modified_ip_address',
         'created_by',
         'modified_by',
         'status',
    ];
}
