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
        Schema::create('seats', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('bus_seat_type_id');
            $table->string('name');
            $table->timestamps();
            $table->boolean('is_booking')->default(false);

            $table->foreign('bus_seat_type_id')->references('id')->on('bus_seat_type')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
