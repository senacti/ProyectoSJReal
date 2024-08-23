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
        Schema::table('parqueadero', function (Blueprint $table) {
            $table->foreign(['parqueadero_id_estacionamiento'], 'fk_parqueadero_estacionamientos1')->references(['id_estacionamiento'])->on('estacionamientos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['parqueadero_id_reserva'], 'fk_parqueadero_reservas1')->references(['id_reserva'])->on('reservas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['parqueadero_id_vehiculo'], 'fk_parqueadero_vehiculos1')->references(['id_vehiculo'])->on('vehiculos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parqueadero', function (Blueprint $table) {
            $table->dropForeign('fk_parqueadero_estacionamientos1');
            $table->dropForeign('fk_parqueadero_reservas1');
            $table->dropForeign('fk_parqueadero_vehiculos1');
        });
    }
};
