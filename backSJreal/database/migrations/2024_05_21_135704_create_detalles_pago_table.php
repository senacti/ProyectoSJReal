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
        Schema::create('detalles_pago', function (Blueprint $table) {
            $table->unsignedBigInteger('id_detalle_pago', true);
            $table->unsignedBigInteger('detalle_pago_id_pago')->index('fk_detalles_pago_pagos1');
            $table->unsignedBigInteger('detalle_pago_id_producto')->index('fk_detalles_pago_productos1');
            $table->double('precio_por_item', null, 0);
            $table->integer('cantidad_item');
            $table->double('detalle_pago_precio_total', null, 0);
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_pago');
    }
};
