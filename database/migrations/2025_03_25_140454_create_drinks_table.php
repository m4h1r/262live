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
        Schema::create('drinks', function (Blueprint $table) {
            $table->id();
            $table->string('type', 100)->nullable(); // Bira, Coctail, Shot,
            $table->string('name', 100)->nullable();
            $table->string('brand', 100)->nullable();
            $table->string('description', 255)->nullable();
            $table->double('price', 11, 2)->nullable();
            $table->tinyInteger('stock')->nullable(); // 1 for available, 0 for out of stock
            $table->string('picture', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drinks');
    }
};
