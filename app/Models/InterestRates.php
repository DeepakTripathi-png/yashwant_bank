<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestRates extends Model
{
    use HasFactory;

    protected $fillable = [
       'main_banner_en_path',
       'main_banner_en_name',
       'main_banner_mr_path',
       'main_banner_mr_name',
       'section_1_heading_en',
       'section_1_sub_heading_en',
       'section_1_decision_date_heading_en',
       'section_1_content_below_first_table_en',            
       'section_1_heading_mr',
       'section_1_sub_heading_mr',
       'section_1_decision_date_heading_mr',
        'section_1_content_below_first_table_mr',
       'section_2_heading_en',
       'section_2_content_below_first_table_en',
       'section_2_heading_mr',
       'section_2_content_below_first_table_mr',
       'created_ip_address',
       'modified_ip_address',
       'created_by',
       'modified_by',
        'status',
      ];
}
