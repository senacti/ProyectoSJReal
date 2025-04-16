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
        Schema::create('time_reservation', function (Blueprint $table) {
            $table->id('gtr_id');
            $table->timestamps();
            $table->dateTime('checkin');
            $table->dateTime('checkout')->nullable();
            $table->foreignId('guest_id')->constrained('guests');
            $table->foreignId('reservation_id')->references('reservation_id')->on('reservations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest_time_reservation');
    }
};
