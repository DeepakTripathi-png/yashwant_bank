<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardofDirectors extends Model
{
    use HasFactory;
 
    protected $fillable = [
          'designation_en', 
          'designation_mr', 
          'name_en',
          'name_mr',
          'created_ip_address',
          'modified_ip_address',
          'created_by',
          'modified_by',
          'status', 
      ];
}
