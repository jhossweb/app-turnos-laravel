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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();

            $table->float("srv_precio");
            
            $table->unsignedBigInteger("tipo_servicio_id");
            $table->unsignedBigInteger("vehiculo_id");
            $table->unsignedBigInteger("cliente_id");

            $table->foreign("tipo_servicio_id")
                    ->references("id")
                    ->on("tipo_servicios");
            
            $table->foreign("vehiculo_id")
                    ->references("id")
                    ->on("vehiculos");

            $table->foreign("cliente_id")
                    ->references("id")
                    ->on("clientes");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
