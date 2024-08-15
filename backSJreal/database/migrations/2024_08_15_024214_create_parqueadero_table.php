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
            $table->integer('id_parqueadero', true);
            $table->integer('parqueadero_id_vehiculo')->index('fk_parqueadero_vehiculos1');
            $table->integer('parqueadero_id_reserva')->index('fk_parqueadero_reservas1');
            $table->string('code', 5);
            $table->tinyInteger('status');
            $table->dateTime('entrada');
            $table->dateTime('salida');
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
