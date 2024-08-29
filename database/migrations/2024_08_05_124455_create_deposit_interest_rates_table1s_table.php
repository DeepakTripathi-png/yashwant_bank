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
        Schema::create('deposit_interest_rates_table1s', function (Blueprint $table) {
            $table->id();

            $table->string('period_en');
            $table->string('period_mr');
            $table->string('general_interest_rate_en');
            $table->string('general_interest_rate_mr');
            $table->string('senior_citizens_interest_rate_en');
            $table->string('senior_citizens_interest_rate_mr');
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
        Schema::dropIfExists('deposit_interest_rates_table1s');
    }
};
