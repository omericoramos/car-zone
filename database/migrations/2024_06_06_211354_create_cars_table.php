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
            $table->foreignId('bodywork_id')->constrained();
            $table->foreignId('engine_id')->constrained();
            $table->foreignId('transmission_id')->constrained();
            $table->foreignId('model_id')->constrained();
            $table->foreignId('brand_id')->constrained();
            $table->foreignId('fuel_id')->constrained();
            $table->foreignId('status_id')->constrained();
            $table->string('title');
            $table->string('license_plate');
            $table->string('chassis');
            $table->int('year');
            $table->decimal('price', 8,2);
            $table->string('color');
            $table->text('description');
            $table->timestamps();
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
