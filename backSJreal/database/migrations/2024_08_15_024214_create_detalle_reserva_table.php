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
        Schema::create('detalle_reserva', function (Blueprint $table) {
            $table->integer('id_hospedaje', true);
            $table->integer('detalle_id_reserva')->index('fk_detalle_reserva_reservas1');
            $table->integer('detalle_id_habitacion')->index('fk_detalle_reserva_habitaciones1');
            $table->integer('destalle_id_huesped')->index('fk_detalle_reserva_huespedes1');
            $table->dateTime('checkin_hospedaje');
            $table->dateTime('checkout_hospedaje');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_reserva');
    }
};
