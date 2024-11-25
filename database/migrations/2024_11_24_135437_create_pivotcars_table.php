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
        Schema::create('pivotcars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cars_id')->constrained('cars');
            $table->foreignId('fitur_id')->constrained('fitur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivotcars');
    }
};
