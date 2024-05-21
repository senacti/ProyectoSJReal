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
        Schema::create('pqrs', function (Blueprint $table) {
            $table->integer('id_PQRS')->primary();
            $table->integer('pqrs_id_usuario')->index('fk_pqrs_usuarios1');
            $table->dateTime('fecha_pqrs')->nullable();
            $table->string('tipo_pqrs', 45)->nullable();
            $table->longText('descripcion_pqrs')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pqrs');
    }
};
