<?php

namespace Database\Seeders;

use App\Models\Bus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Bus::insert([
            [
                "bus_type" => "Giường nằm",
                "license_plate" => "51B-79834",
                "total_seat" => 40,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_type" => "Ghế ngồi",
                "license_plate" => "51B-79877",
                "total_seat" => 12,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
