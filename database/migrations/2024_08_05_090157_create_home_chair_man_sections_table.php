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
        Schema::create('home_chair_man_sections', function (Blueprint $table) {
            $table->id();

            $table->string('chair_man_heading_1_en');
            $table->string('chair_man_heading_1_mr');
            $table->string('chair_man_heading_2_en');
            $table->string('chair_man_heading_2_mr');
            $table->longText('chair_man_description_en');
            $table->longText('chair_man_description_mr');

            $table->string('chair_man_name_en');
            $table->string('chair_man_name_mr');

            $table->string('chair_man_image_path');
            $table->string('chair_man_image_name');

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
        Schema::dropIfExists('home_chair_man_sections');
    }
};
