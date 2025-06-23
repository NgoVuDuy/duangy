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
        Schema::create('pickup_dropoff_points', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trip_id')->nullable();
            $table->string('name');
            $table->string('address');
            $table->string('time');
            $table->string('type');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();

            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pickup_dropoff_points');
    }
};
