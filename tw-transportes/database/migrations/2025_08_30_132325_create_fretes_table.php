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
        Schema::create('fretes', function (Blueprint $table) {
            $table->id();
            $table->string('origem');
            $table->string('destino');
            $table->string('codigo_rastreio')->unique();
            $table->string('status');
            // chaves Estrangeiras
            $table->foreignId('remente_id')->constrained('clientes')->onDelete('cascade');
            $table->foreignId('destinario_id')->constrained('clientes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fretes');
    }
};
