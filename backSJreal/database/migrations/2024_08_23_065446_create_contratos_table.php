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
        Schema::create('contratos', function (Blueprint $table) {
            $table->integer('id_contrato', true);
            $table->integer('contrato_id_usuario')->index('fk_contratos_usuarios1');
            $table->dateTime('fecha_inicio_contrato');
            $table->string('fecha_final_contrato', 45)->nullable();
            $table->string('tipo_contrato', 45);
            $table->double('salario_contrato', null, 0);
            $table->string('estado_contrato', 20);
            $table->string('frecuencia_pago_contrato', 45);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
