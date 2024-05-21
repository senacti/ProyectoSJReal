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
        Schema::table('pagos', function (Blueprint $table) {
            $table->foreign(['pago_id_hospedaje'], 'fk_pagos_hospedajes1')->references(['id_hospedaje'])->on('hospedajes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['pago_id_persona'], 'fk_Pago_usuarios1')->references(['id_usuario'])->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pagos', function (Blueprint $table) {
            $table->dropForeign('fk_pagos_hospedajes1');
            $table->dropForeign('fk_Pago_usuarios1');
        });
    }
};
