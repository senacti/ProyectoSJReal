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
            $table->foreign(['hospedaje_id_hospedaje'], 'fk_vehiculos_has_hospedajes_hospedajes1')->references(['id_hospedaje'])->on('hospedajes')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['vehiculo_id_vehiculo'], 'fk_vehiculos_has_hospedajes_vehiculos1')->references(['id_vehiculo'])->on('vehiculos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parqueadero', function (Blueprint $table) {
            $table->dropForeign('fk_vehiculos_has_hospedajes_hospedajes1');
            $table->dropForeign('fk_vehiculos_has_hospedajes_vehiculos1');
        });
    }
};
