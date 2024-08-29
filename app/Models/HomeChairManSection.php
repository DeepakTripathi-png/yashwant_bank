<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeChairManSection extends Model
{
    use HasFactory;


    
    protected $fillable = [
            'chair_man_heading_1_en',
            'chair_man_heading_1_mr',
            'chair_man_heading_2_en',
            'chair_man_heading_2_mr',
            'chair_man_description_en',
            'chair_man_description_mr',

            'chair_man_name_en',
            'chair_man_name_mr',

            'chair_man_image_path',
            'chair_man_image_name',

            'created_ip_address',
            'modified_ip_address',
            'created_by',
            'modified_by',
             'status', 
   ];
}
