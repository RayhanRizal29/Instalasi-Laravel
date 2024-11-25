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
        Schema::create('manufaktur', function (Blueprint $table) {
            $table->id();
            $table->string('pabrikan');
            $table->string('negara');
            $table->foreignId('id_cars')->constrained(
                table:'cars',
                indexName:'post_cars_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manufaktur');
    }
};
