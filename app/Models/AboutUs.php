<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;



    
    protected $fillable = [
      'about_us_heading_en', 
      'about_us_heading_mr', 

      'description_en',
      'description_mr',
        
      'created_ip_address',
      'modified_ip_address',
       'created_by',
       'modified_by',
       'status', 
    ];
    
}
