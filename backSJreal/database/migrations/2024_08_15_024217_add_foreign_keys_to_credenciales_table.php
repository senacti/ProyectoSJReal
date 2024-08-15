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
        Schema::table('credenciales', function (Blueprint $table) {
            $table->foreign(['credencial_id_user'], 'fk_credenciales_users1')->references(['id_user'])->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['credencial_id_rol'], 'fk_roles_has_usuarios_roles1')->references(['id_rol'])->on('roles')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('credenciales', function (Blueprint $table) {
            $table->dropForeign('fk_credenciales_users1');
            $table->dropForeign('fk_roles_has_usuarios_roles1');
        });
    }
};
