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
        Schema::table('sucursales_has_proveedores', function (Blueprint $table) {
            $table->foreign(['proveedor_id_proveedor'], 'fk_sucursales_has_proveedores_proveedores1')->references(['id_proveedor'])->on('proveedores')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['sucursal_id_sucursal'], 'fk_Sucursal_has_Proveedor_Sucursal1')->references(['id_sucursal'])->on('sucursales')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sucursales_has_proveedores', function (Blueprint $table) {
            $table->dropForeign('fk_sucursales_has_proveedores_proveedores1');
            $table->dropForeign('fk_Sucursal_has_Proveedor_Sucursal1');
        });
    }
};
