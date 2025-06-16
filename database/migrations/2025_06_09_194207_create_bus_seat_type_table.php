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
        Schema::create('bus_seat_type', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('seat_type_id')->nullable();
            $table->unsignedBigInteger('bus_id')->nullable();
            $table->timestamps();

            $table->foreign('seat_type_id')->references('id')->on('seat_types')->onDelete('set null');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_seat_type');
    }
};
