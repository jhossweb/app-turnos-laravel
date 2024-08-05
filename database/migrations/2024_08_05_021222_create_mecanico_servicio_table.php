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
        Schema::create('mecanico_servicio', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("servicio_id");
            $table->unsignedBigInteger("mecanico_id");

            $table->foreign("servicio_id")
                    ->references("id")
                    ->on("servicios");
            
            $table->foreign("mecanico_id")
                  ->references("id")
                  ->on("mecanicos");
                    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mecanico_servicio');
    }
};
