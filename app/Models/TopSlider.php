<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopSlider extends Model
{
    use HasFactory;


    protected $fillable = [
        'slider_text_en',
        'slider_text_mr',
        'created_ip_address',
        'modified_ip_address',
        'created_by',
        'modified_by',
        'status', 
   ];
}
