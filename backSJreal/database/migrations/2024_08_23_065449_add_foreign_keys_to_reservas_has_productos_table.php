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
        Schema::table('reservas_has_productos', function (Blueprint $table) {
            $table->foreign(['producto_id_reserva'], 'fk_reservas_has_productos_productos1')->references(['id_producto'])->on('productos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['reserva_id_producto'], 'fk_reservas_has_productos_reservas1')->references(['id_reserva'])->on('reservas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservas_has_productos', function (Blueprint $table) {
            $table->dropForeign('fk_reservas_has_productos_productos1');
            $table->dropForeign('fk_reservas_has_productos_reservas1');
        });
    }
};
