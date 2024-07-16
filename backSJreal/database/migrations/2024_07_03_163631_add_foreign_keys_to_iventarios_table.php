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
        Schema::table('iventarios', function (Blueprint $table) {
            $table->foreign(['inventario_id_control'], 'fk_Sucursal_has_Inventario_Control_Inventario1')->references(['id_control_inventario'])->on('control_inventarios')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['inventario_id_sucursal'], 'fk_sucursal_has_inventario_sucursales1')->references(['id_sucursal'])->on('sucursales')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('iventarios', function (Blueprint $table) {
            $table->dropForeign('fk_Sucursal_has_Inventario_Control_Inventario1');
            $table->dropForeign('fk_sucursal_has_inventario_sucursales1');
        });
    }
};
