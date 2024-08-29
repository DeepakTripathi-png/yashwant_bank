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
        Schema::create('service_charges_tariffs', function (Blueprint $table) {
            $table->id();

            $table->string('sr_no_en')->nullable();
            $table->string('sr_no_mr')->nullable();
            $table->string('charges_en')->nullable();
            $table->string('charges_mr')->nullable();
            $table->string('amount_en')->nullable();
            $table->string('amount_mr')->nullable();
            $table->longText('remarks_en')->nullable();
            $table->longText('remarks_mr')->nullable();
            
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
        Schema::dropIfExists('service_charges_tariffs');
    }
};
