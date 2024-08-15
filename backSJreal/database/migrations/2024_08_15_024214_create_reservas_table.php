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
        Schema::create('reservas', function (Blueprint $table) {
            $table->integer('id_reserva', true);
            $table->integer('reserva_id_usuario')->index('fk_reservas_usuarios1');
            $table->string('codigo_reserva', 36);
            $table->dateTime('checkin_reserva');
            $table->dateTime('checkout_reserva');
            $table->integer('cantidad_habitaciones_reserva');
            $table->double('precio_por_habitacion_reserva', null, 0);
            $table->double('precio_total_reserva', null, 0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
