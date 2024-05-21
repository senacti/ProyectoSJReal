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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->integer('id_proveedor', true);
            $table->string('NIT_proveedor', 15);
            $table->string('nombre_proveedor', 45);
            $table->string('telefono_proveedor', 15);
            $table->string('correo_proveedor', 45);
            $table->enum('categoria_proveedor', ['Aseo', 'Textiles', ''])->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
