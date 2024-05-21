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
        Schema::create('hospedajes', function (Blueprint $table) {
            $table->integer('id_hospedaje', true);
            $table->integer('hospedaje_id_habitacion')->index('fk_habitacion_has_huesped_habitacion1');
            $table->integer('hospedaje_id_usuario')->index('fk_hospedaje_usuarios1');
            $table->dateTime('check_in_hospedaje');
            $table->dateTime('check_out_hospedaje');
            $table->integer('cantidad_habitaciones_hospedaje');
            $table->integer('cantidad_personas_hospedaje');
            $table->integer('dias_hospedaje');
            $table->enum('estado_hospedaje', ['Cancelado', 'Abonado', 'Pagado']);
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospedajes');
    }
};
