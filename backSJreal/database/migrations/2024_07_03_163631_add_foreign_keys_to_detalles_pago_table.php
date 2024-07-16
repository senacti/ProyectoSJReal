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
        Schema::table('detalles_pago', function (Blueprint $table) {
            $table->foreign(['detalle_pago_id_pago'], 'fk_detalles_pago_pagos1')->references(['id_pago'])->on('pagos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['detalle_pago_id_producto'], 'fk_detalles_pago_productos1')->references(['id_producto'])->on('productos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalles_pago', function (Blueprint $table) {
            $table->dropForeign('fk_detalles_pago_pagos1');
            $table->dropForeign('fk_detalles_pago_productos1');
        });
    }
};
