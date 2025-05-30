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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('bus_id')->nullable();
            $table->unsignedBigInteger("route_id")->nullable();
            
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->string("status");
            $table->string("price");

            $table->timestamps();

            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('set null');
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
