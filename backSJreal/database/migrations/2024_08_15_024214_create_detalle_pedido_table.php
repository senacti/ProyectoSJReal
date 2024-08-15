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
        Schema::create('detalle_pedido', function (Blueprint $table) {
            $table->integer('id_detalle_pedido', true);
            $table->integer('detalle_id_inventario')->index('fk_detalle_pedido_inventarios1');
            $table->integer('detalle_id_pedido')->index('fk_detalle_pedido_pedidos1');
            $table->integer('detalle_cp');
            $table->double('detalle_pp', null, 0);
            $table->double('detalle_total', null, 0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedido');
    }
};
