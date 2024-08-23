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
            $table->integer('id_persona', true);
            $table->string('nombre_persona', 45);
            $table->string('apellido_persona', 55);
            $table->string('documento_persona', 20)->unique('documento_persona_unique');
            $table->string('telefono_persona', 10);
            $table->string('correo_persona', 70);
            $table->string('tipo_documento', 30);
            $table->string('nacionalidad', 100);
            $table->enum('tipo_persona', ['juridica', 'natural']);
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
