<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('interest_rates', function (Blueprint $table) {
            $table->id();
            $table->string('main_banner_en_path')->nullable();
            $table->string('main_banner_en_name')->nullable();
            $table->string('main_banner_mr_path')->nullable();
            $table->string('main_banner_mr_name')->nullable();
            $table->string('section_1_heading_en')->nullable();
            $table->string('section_1_sub_heading_en')->nullable();
            $table->string('section_1_decision_date_heading_en')->nullable();
            $table->longText('section_1_content_below_first_table_en')->nullable();            
            $table->string('section_1_heading_mr')->nullable();
            $table->string('section_1_sub_heading_mr')->nullable();
            $table->string('section_1_decision_date_heading_mr')->nullable();
            $table->longText('section_1_content_below_first_table_mr')->nullable();
            $table->string('section_2_heading_en')->nullable();
            $table->string('section_2_content_below_first_table_en')->nullable();
            $table->string('section_2_heading_mr')->nullable();
            $table->string('section_2_content_below_first_table_mr')->nullable();
            $table->string('created_ip_address')->nullable();
            $table->string('modified_ip_address')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('modified_by')->nullable();
            $table->enum('status', ['active', 'delete', 'inactive'])->default('active');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interest_rates');
    }
};
