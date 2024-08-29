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
        Schema::create('master_banners', function (Blueprint $table) {
            $table->id();

            $table->string('page_name'); 

            $table->string('banner_heading_heading_en'); 
            $table->string('banner_heading_heading_mr'); 
            $table->string('banner_image_path')->nullable(); 
            $table->string('banner_image_name')->nullable(); 

      

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
        Schema::dropIfExists('master_banners');
    }
};
