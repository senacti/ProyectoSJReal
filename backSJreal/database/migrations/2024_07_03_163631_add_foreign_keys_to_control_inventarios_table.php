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
        Schema::table('control_inventarios', function (Blueprint $table) {
            $table->foreign(['control_inventario_id_producto'], 'fk_control_inventarios_productos1')->references(['id_producto'])->on('productos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('control_inventarios', function (Blueprint $table) {
            $table->dropForeign('fk_control_inventarios_productos1');
        });
    }
};
