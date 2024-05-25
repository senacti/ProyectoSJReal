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
        Schema::create('parqueadero', function (Blueprint $table) {
            $table->unsignedBigInteger('id_parqueadero')->primary();
            $table->unsignedBigInteger('vehiculo_id_vehiculo')->index('fk_vehiculos_has_hospedajes_vehiculos1');
            $table->unsignedBigInteger('hospedaje_id_hospedaje')->index('fk_vehiculos_has_hospedajes_hospedajes1');
            $table->tinyInteger('status');
            $table->string('code', 5);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parqueadero');
    }
};
