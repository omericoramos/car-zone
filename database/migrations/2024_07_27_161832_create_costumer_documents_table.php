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
        Schema::create('costumer_documents', function (Blueprint $table) {
            $table->id();
            $table->string('path_Proof_address');
            $table->string('path_identification');
            $table->string('path_Proof_income_1');
            $table->string('path_Proof_income_2');
            $table->string('path_Proof_income_3');
            $table->foreignId('customer_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costumer_documents');
    }
};
