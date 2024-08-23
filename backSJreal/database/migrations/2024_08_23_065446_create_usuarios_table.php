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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id_user', true);
            $table->integer('usuario_id_persona')->index('fk_users_personas1');
            $table->string('nombre_usuario', 16)->unique('usuario_nombre_unique');
            $table->string('email_usuario');
            $table->string('contrasena_usuario', 32);
            $table->string('rol_usuario', 45);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
