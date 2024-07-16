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
        Schema::create('iventarios', function (Blueprint $table) {
            $table->integer('id_inventario', true);
            $table->integer('inventario_id_control')->index('fk_sucursal_has_inventario_control_inventario1');
            $table->integer('inventario_id_sucursal')->index('fk_sucursal_has_inventario_sucursales1');
            $table->integer('cantidad_inventarios');
            $table->string('nombre_Inventario', 45);
            $table->string('categoria_Inventario', 45);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iventarios');
    }
};
