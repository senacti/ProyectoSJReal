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
        Schema::create('productos', function (Blueprint $table) {
            $table->integer('id_producto', true);
            $table->double('precio_producto', null, 0);
            $table->string('descripcion_producto', 200);
            $table->string('nombre_producto', 50);
            $table->string('estado_producto', 20);
            $table->integer('existencias_producto');
            $table->integer('maximo_producto');
            $table->integer('minimo_producto');
            $table->string('tipo_producto', 45);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
