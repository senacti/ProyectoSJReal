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
        Schema::table('roles_has_usuarios', function (Blueprint $table) {
            $table->foreign(['rol_id_rol'], 'fk_roles_has_usuarios_roles1')->references(['id_rol'])->on('roles')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['usuarios_id_usuario'], 'fk_roles_has_usuarios_usuarios1')->references(['id_usuario'])->on('usuarios')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('roles_has_usuarios', function (Blueprint $table) {
            $table->dropForeign('fk_roles_has_usuarios_roles1');
            $table->dropForeign('fk_roles_has_usuarios_usuarios1');
        });
    }
};
