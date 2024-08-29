<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    
    protected $fillable = [

       'service_slug_url', 

       'service_name_en', 
       'service_name_mr', 

        'service_description_en',
        'service_description_mr',

       'service_image_path',
       'service_image_name',

       'created_ip_address',
       'modified_ip_address',
        'created_by',
        'modified_by',
        'status', 
      ];
}
