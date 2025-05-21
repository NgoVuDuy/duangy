<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Trip::insert([
            [
                "bus_id" => 1,
                "route_id" => 1,
                "departure_time" => "12:30",
                "arrival_time" => "20:00",
                "status" => "pending",
                "price" => "120.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 1,
                "route_id" => 2,
                "departure_time" => "12:30",
                "arrival_time" => "20:00",
                "status" => "pending",
                "price" => "120.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ]);
    }
}
