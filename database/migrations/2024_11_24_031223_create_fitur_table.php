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
        Schema::create('fitur', function (Blueprint $table) {
            $table->id();
            $table->string('fitur');
            $table->foreignId('id_cars')->constrained(
                table:'cars',
                indexName:'fitur_cars'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fitur');
    }
};
