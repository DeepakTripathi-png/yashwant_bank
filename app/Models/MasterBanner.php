<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterBanner extends Model
{
    use HasFactory;


    protected $fillable = [

        'page_name', 
        'banner_heading_heading_en', 
        'banner_heading_heading_mr',
        'banner_image_path',
        'banner_image_name', 
        'created_ip_address',
        'modified_ip_address',
         'created_by',
         'modified_by',
         'status', 
      ];
}
