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
        Schema::create('sucursales_has_proveedores', function (Blueprint $table) {
            $table->unsignedBigInteger('id_sucursales_has_proveedores', true);
            $table->unsignedBigInteger('sucursal_id_sucursal')->index('fk_sucursal_has_proveedor_sucursal1');
            $table->unsignedBigInteger('proveedor_id_proveedor')->index('fk_sucursales_has_proveedores_proveedores1');
            
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sucursales_has_proveedores');
    }
};
