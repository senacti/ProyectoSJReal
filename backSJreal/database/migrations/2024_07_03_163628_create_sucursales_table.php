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
        Schema::create('sucursales', function (Blueprint $table) {
            $table->integer('id_sucursal', true);
            $table->integer('sucursal_id_usuario')->index('fk_sucursal_usuarios1');
            $table->string('NIT_sucursal', 15);
            $table->string('nombre_sucursal', 50);
            $table->string('departamento_sucursal', 30);
            $table->string('cuidad_sucursal', 50);
            $table->integer('calle_sucursal');
            $table->integer('carrera_sucursal');
            $table->string('telefono_sucursal', 10);
            $table->string('correo_sucursal', 80);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sucursales');
    }
};
