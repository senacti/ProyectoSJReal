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
        Schema::table('detalle_pedido', function (Blueprint $table) {
            $table->foreign(['detalle_id_inventario'], 'fk_detalle_pedido_inventarios1')->references(['id_inventario'])->on('inventarios')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['detalle_id_pedido'], 'fk_detalle_pedido_pedidos1')->references(['id_pedido'])->on('pedidos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalle_pedido', function (Blueprint $table) {
            $table->dropForeign('fk_detalle_pedido_inventarios1');
            $table->dropForeign('fk_detalle_pedido_pedidos1');
        });
    }
};
