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
            $table->foreignId('body_work_id')->constrained();
            $table->foreignId('engine_id')->constrained();
            $table->foreignId('transmission_id')->constrained();
            $table->foreignId('car_model_id')->constrained();
            $table->foreignId('fuel_id')->constrained();
            $table->foreignId('status_car_id')->constrained();
            $table->string('title');
            $table->string('license_plate');
            $table->string('chassis');
            $table->string('year');
            $table->decimal('price', 8,2);
            $table->string('color');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
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
