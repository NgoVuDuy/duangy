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
            // $table->string('email');
            $table->string('user_phone')->nullable();
            $table->unsignedBigInteger('trip_id')->nullable();
            $table->unsignedBigInteger('pickup')->nullable();
            $table->unsignedBigInteger('dropoff')->nullable();
            $table->unsignedBigInteger('seat_id')->nullable();
            $table->unsignedBigInteger('payment_id')->nullable();
            // số tiền được hoàn lại
            $table->string('refund_amount')->nullable();
            $table->string('price');
            $table->string('status');
            $table->string('method');
            $table->timestamps();

            $table->foreign('user_phone')->references('phone')->on('users')->onDelete('set null');
            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('set null');

            $table->foreign('pickup')->references('id')->on('pickup_dropoff_points')->onDelete('set null');
            $table->foreign('dropoff')->references('id')->on('pickup_dropoff_points')->onDelete('set null');

            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('set null');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('set null');

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
