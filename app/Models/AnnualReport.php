<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnualReport extends Model
{
    use HasFactory;

    protected $fillable = [
          'report_name_en', 
          'report_name_mr', 
          'report_pdf_en_path', 
          'report_pdf_en_name', 
          'report_pdf_mr_path', 
          'report_pdf_mr_name', 
          'created_ip_address',
          'modified_ip_address',
          'created_by',
          'modified_by',
    ];
}
