<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeVariousSchemeSection extends Model
{
    use HasFactory;

    protected $fillable = [

            'scheme_name_en',
            'scheme_name_mr',
            'scheme_image_path',
            'scheme_image_name',
            'created_ip_address',
            'modified_ip_address',
            'created_by',
            'modified_by',
             'status', 
      ];
}
