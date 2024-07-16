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
            $table->string('id_reservas', 45)->primary();
            $table->integer('reserva_id_hospedaje')->index('fk_hospedajes_has_habitaciones_hospedajes1');
            $table->integer('reserva_id_habitacion')->index('fk_hospedajes_has_habitaciones_habitaciones1');
            $table->dateTime('fecha_entrada');
            $table->dateTime('fecha_salida');
            $table->string('cod_reserva', 36);
            $table->integer('cantidad_persona');
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
