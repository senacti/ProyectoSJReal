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
        Schema::table('pqrs', function (Blueprint $table) {
            $table->foreign(['pqrs_id_reserva'], 'fk_PQRS_reservas1')->references(['id_reserva'])->on('reservas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['pqrs_id_user'], 'fk_PQRS_users1')->references(['id_user'])->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pqrs', function (Blueprint $table) {
            $table->dropForeign('fk_PQRS_reservas1');
            $table->dropForeign('fk_PQRS_users1');
        });
    }
};
