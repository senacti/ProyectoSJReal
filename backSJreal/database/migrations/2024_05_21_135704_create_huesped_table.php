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
        Schema::create('huesped', function (Blueprint $table) {
            $table->unsignedBigInteger('idHuesped', true);
            $table->string('cedula _Huesped', 15);
            $table->string('primer_Nombre_Huesped', 40);
            $table->string('segundo_Nombre_Huesped', 40)->nullable();
            $table->string('primer_Apellido_Huesped', 45);
            $table->string('segundo_Apellido_Huesped', 45)->nullable();
            $table->enum('tipo_Documento_Huesped', ['CC', 'CE', 'TI', 'Pasaporte']);
            $table->date('fecha_Nacimiento_Huesped');
            $table->integer('edad_Huesped');
            $table->string('telefono_Huesped', 15);
            $table->string('correo_Huesped', 50);
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('huesped');
    }
};
