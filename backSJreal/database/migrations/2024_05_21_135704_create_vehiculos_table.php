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
            $table->unsignedBigInteger('id_vehiculo', true);
            $table->unsignedBigInteger('vehiculo_id_usuario')->index('fk_vehiculos_usuarios1');
            $table->string('placa_vehiculo', 10);
            $table->string('modelo_vehiculo', 45);
            $table->string('color_vehiculo', 15);
            
            $table->timestamps();
            $table->softDeletes();
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
