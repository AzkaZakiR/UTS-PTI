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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('brand');
            $table->string('model');
            $table->string('year');
            $table->string('status');
            $table->string('plat_number');
            $table->integer('price_per_day');
            $table->integer('price_per_week');
            $table->string('type')->nullable();
            $table->string('seats')->nullable();
            $table->string('engine')->nullable();
            $table->string('gasoline')->nullable();
            $table->string('transmission')->nullable();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
