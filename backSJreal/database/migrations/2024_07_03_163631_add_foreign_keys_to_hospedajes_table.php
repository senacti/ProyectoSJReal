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
        Schema::table('hospedajes', function (Blueprint $table) {
            $table->foreign(['hospedaje_id_usuario'], 'fk_Hospedaje_usuarios1')->references(['id_usuario'])->on('usuarios')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hospedajes', function (Blueprint $table) {
            $table->dropForeign('fk_Hospedaje_usuarios1');
        });
    }
};
