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
        Schema::create('lateness_and_dearly_closings', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name')->nullable();
            $table->string('year')->nullable();
            $table->string('month')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lateness_and_dearly_closings');
    }
};
