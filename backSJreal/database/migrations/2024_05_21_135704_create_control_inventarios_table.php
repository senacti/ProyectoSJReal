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
        Schema::create('control_inventarios', function (Blueprint $table) {
            $table->unsignedBigInteger('id_control_inventario', true);
            $table->unsignedBigInteger('control_inventario_id_producto')->index('fk_control_inventarios_productos1');
            $table->date('fecha_actualizacion');
            $table->enum('tipop_actualizacion', ['Modificar cantidad producto', 'Añadir nuevo Item', 'Eliminar Item']);
            $table->integer('cantidad_añadida');
            $table->integer('cantidad_restada');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('control_inventarios');
    }
};
