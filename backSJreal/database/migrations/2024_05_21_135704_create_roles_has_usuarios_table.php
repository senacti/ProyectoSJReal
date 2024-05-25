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
        Schema::create('roles_has_usuarios', function (Blueprint $table) {
            $table->unsignedBigInteger('id',true);
            $table->unsignedBigInteger('rol_id_rol')->index('fk_roles_has_usuarios_roles1');
            $table->unsignedBigInteger('usuarios_id_usuario')->index('fk_roles_has_usuarios_usuarios1');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles_has_usuarios');
    }
};
// roles_has_usuarios
// usuario_id_usuario
// rol_id_rol