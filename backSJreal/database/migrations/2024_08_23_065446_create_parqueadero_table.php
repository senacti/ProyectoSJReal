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
        Schema::create('parqueadero', function (Blueprint $table) {
            $table->integer('id_parqueadero', true);
            $table->integer('parqueadero_id_vehiculo')->index('fk_parqueadero_vehiculos1');
            $table->integer('parqueadero_id_reserva')->index('fk_parqueadero_reservas1');
            $table->integer('parqueadero_id_estacionamiento')->index('fk_parqueadero_estacionamientos1');
            $table->dateTime('fecha_parqueadero');
            $table->string('estado_parqueadero', 20);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parqueadero');
    }
};
