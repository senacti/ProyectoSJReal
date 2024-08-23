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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->integer('id_inventario', true);
            $table->integer('inventario_id_producto')->index('fk_inventarios_productos1');
            $table->integer('cantidad_inventario');
            $table->string('nombre_inventario', 45);
            $table->string('categoria_inventario', 45);
            $table->dateTime('fecha_inventario');
            $table->string('estado_inventario', 45);
            $table->integer('cantidad_minima_inventario');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
