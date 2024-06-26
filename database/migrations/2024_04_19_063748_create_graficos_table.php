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
        Schema::create('graficos', function (Blueprint $table) {
            $table->id();
            $table->string('Mes');
            $table->string('Ingreso');
            $table->string('Gasto');
            $table->string('Valor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graficos');
    }
};
