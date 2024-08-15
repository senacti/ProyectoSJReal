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
        Schema::create('reservas_has_productos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('reserva_id_producto')->index('fk_reservas_has_productos_reservas1');
            $table->integer('producto_id_reserva')->index('fk_reservas_has_productos_productos1');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas_has_productos');
    }
};
