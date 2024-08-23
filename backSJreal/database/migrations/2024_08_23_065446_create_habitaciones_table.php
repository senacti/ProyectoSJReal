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
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->integer('id_habitacion', true);
            $table->string('habitacion_tipo', 30);
            $table->string('numero_habitacion', 3);
            $table->text('descripcion_habitacion');
            $table->integer('capacidad_habitacion');
            $table->string('status_habitacion', 30);
            $table->double('precio_habitacion', null, 0);
            $table->string('estado_aseo', 45);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
