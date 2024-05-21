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
        Schema::create('personas', function (Blueprint $table) {
            $table->integer('id_persona',true);//->primary();
            $table->string('nombre_persona', 45);
            $table->string('apellido_persona', 55);
            $table->string('documento_persona', 20);
            $table->string('telefono', 10);
            $table->string('correo_persona', 70);
            $table->enum('tipo_documento', ['cedula de ciudadania', 'targeta de indentidad', 'cedula de extrangeria', 'pasaporte', 'NUIP'])->default('cedula de ciudadania');
            $table->string('nacionalidad', 100);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
