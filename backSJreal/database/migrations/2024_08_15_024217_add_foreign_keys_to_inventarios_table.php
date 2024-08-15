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
        Schema::table('inventarios', function (Blueprint $table) {
            $table->foreign(['inventario_id_producto'], 'fk_inventarios_productos1')->references(['id_producto'])->on('productos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['inventario_id_sucursal'], 'fk_sucursal_has_inventario_sucursales1')->references(['id_sucursal'])->on('sucursales')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inventarios', function (Blueprint $table) {
            $table->dropForeign('fk_inventarios_productos1');
            $table->dropForeign('fk_sucursal_has_inventario_sucursales1');
        });
    }
};
