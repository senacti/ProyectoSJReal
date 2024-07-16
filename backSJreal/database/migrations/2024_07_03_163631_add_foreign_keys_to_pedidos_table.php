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
        Schema::table('pedidos', function (Blueprint $table) {
            $table->foreign(['pedido_id_control_inventario'], 'fk_pedido_control_inventarios1')->references(['id_control_inventario'])->on('control_inventarios')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['pedido_id_usuario'], 'fk_Pedido_usuarios1')->references(['id_usuario'])->on('usuarios')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['pedido_id_proveedor'], 'fk_Proveedor_has_Producto_Proveedor1')->references(['id_proveedor'])->on('proveedores')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->dropForeign('fk_pedido_control_inventarios1');
            $table->dropForeign('fk_Pedido_usuarios1');
            $table->dropForeign('fk_Proveedor_has_Producto_Proveedor1');
        });
    }
};
