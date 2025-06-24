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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('user_phone')->nullable();
            $table->unsignedBigInteger('trip_id')->nullable();
            $table->string('pickup');
            $table->string('dropoff');
            $table->unsignedBigInteger('seat_id')->nullable();
            $table->string('status');
            $table->string('method');
            $table->timestamps();

            $table->foreign('user_phone')->references('phone')->on('users')->onDelete('set null');
            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('set null');
            // $table->foreign('pickup_dropoff_point_id')->references('id')->on('pickup_dropoff_points')->onDelete('set null');
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
