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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->text('personal_no')->nullable();
            $table->text('office_no')->nullable();
            $table->text('address')->nullable();
            $table->text('image')->nullable();
            $table->date('date')->nullable();
            $table->text('marital_status')->nullable();
            $table->text('gender')->nullable();
            $table->time('time')->nullable();
            $table->timestamps();
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
