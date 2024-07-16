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
        Schema::create('pagos', function (Blueprint $table) {
            $table->integer('id_pago', true);
            $table->integer('pago_id_hospedaje')->index('fk_pagos_hospedajes1');
            $table->integer('pago_id_persona')->index('fk_pago_usuarios1');
            $table->string('titular_pago', 80);
            $table->string('medio_pago', 20);
            $table->string('concepto_pago', 500);
            $table->decimal('total_pago', 10, 0);
            $table->string('tipo_cliente', 30);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
