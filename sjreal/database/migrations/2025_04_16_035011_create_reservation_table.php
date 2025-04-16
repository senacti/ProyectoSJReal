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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->timestamps();
            $table->integer('amount_adults');
            $table->integer('amount_children');
            $table->integer('lodgement_days');
            $table->enum('status', ['En curso', 'Finalizada', 'Confirmada']);
            $table->foreignId('room_id')->references('room_id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
