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
        Schema::table('habitaciones', function (Blueprint $table) {
            $table->foreign(['habitacion_id_sucursal'], 'fk_habitaciones_sucursales1')->references(['id_sucursal'])->on('sucursales')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['temporadas_id_temporada'], 'fk_habitaciones_temporadas1')->references(['id_temporada'])->on('temporadas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('habitaciones', function (Blueprint $table) {
            $table->dropForeign('fk_habitaciones_sucursales1');
            $table->dropForeign('fk_habitaciones_temporadas1');
        });
    }
};
