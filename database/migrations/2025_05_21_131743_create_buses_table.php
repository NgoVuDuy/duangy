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
        Schema::create('buses', function (Blueprint $table) {
            
            $table->id();
            $table->string('bus_operator_phone')->nullable();
            $table->string('bus_type');
            $table->string('image');
            $table->string('license_plate');
            $table->integer('total_seat');
            $table->timestamps();

            $table->foreign('bus_operator_phone')->references('phone')->on('bus_operators')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
