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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();

            $table->string('vhl_placa')->unique();
            $table->string('vhl_year');
            
            $table->unsignedBigInteger('tpv_id');
            $table->unsignedBigInteger("cliente_id");
            
            $table->foreign('tpv_id')->references('id')->on('tipo_vehiculos');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
