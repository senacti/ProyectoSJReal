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
        Schema::table('reservas', function (Blueprint $table) {
            $table->foreign(['reserva_id_habitacion'], 'fk_hospedajes_has_habitaciones_habitaciones1')->references(['id_habitacion'])->on('habitaciones')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['reserva_id_hospedaje'], 'fk_hospedajes_has_habitaciones_hospedajes1')->references(['id_hospedaje'])->on('hospedajes')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservas', function (Blueprint $table) {
            $table->dropForeign('fk_hospedajes_has_habitaciones_habitaciones1');
            $table->dropForeign('fk_hospedajes_has_habitaciones_hospedajes1');
        });
    }
};
