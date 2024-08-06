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
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cliente_id");
            $table->unsignedBigInteger("servicio_id");
            $table->enum("estado", ["activo", "suspendido", "terminado"]);

            $table->foreign("cliente_id")
                    ->references("id")
                    ->on("clientes");

            $table->foreign("servicio_id")
                    ->references("id")
                    ->on("servicios");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnos');
    }
};
