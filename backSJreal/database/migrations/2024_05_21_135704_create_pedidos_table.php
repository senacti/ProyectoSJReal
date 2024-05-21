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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->integer('id_pedido', true);
            $table->integer('pedido_id_usuario')->index('fk_pedido_usuarios1');
            $table->integer('pedido_id_control_inventario')->index('fk_pedido_control_inventarios1');
            $table->integer('pedido_id_proveedor')->index('fk_proveedor_has_producto_proveedor1');
            $table->integer('cantidad_producto');
            $table->dateTime('fecha_entrega');
            $table->decimal('precio_total_pedido', 10, 0);
            $table->decimal('precio_unitario_producto', 10, 0);
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
