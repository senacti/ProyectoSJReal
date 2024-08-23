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
        Schema::table('detalle_reserva', function (Blueprint $table) {
            $table->foreign(['detalle_id_habitacion'], 'fk_detalle_reserva_habitaciones1')->references(['id_habitacion'])->on('habitaciones')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['destalle_id_huesped'], 'fk_detalle_reserva_huespedes1')->references(['id_huespede'])->on('huespedes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['detalle_id_reserva'], 'fk_detalle_reserva_reservas1')->references(['id_reserva'])->on('reservas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalle_reserva', function (Blueprint $table) {
            $table->dropForeign('fk_detalle_reserva_habitaciones1');
            $table->dropForeign('fk_detalle_reserva_huespedes1');
            $table->dropForeign('fk_detalle_reserva_reservas1');
        });
    }
};
