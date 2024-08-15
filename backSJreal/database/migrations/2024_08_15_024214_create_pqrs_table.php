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
            $table->integer('id_pqrs', true);
            $table->integer('pqrs_id_reserva')->index('fk_pqrs_reservas1');
            $table->integer('pqrs_id_user')->index('fk_pqrs_users1');
            $table->dateTime('fecha_pqrs');
            $table->string('tipo_pqrs', 45);
            $table->longText('descripcion_pqrs');
            $table->string('estado_pqrs', 45);
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
