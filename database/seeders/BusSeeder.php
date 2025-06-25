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
                "bus_operator_id" => 1,
                "bus_type" => "Giường nằm",
                "license_plate" => "51B-79834",
                "image" => "",
                "total_seat" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_operator_id" => 1,
                "bus_type" => "Ghế ngồi",
                "license_plate" => "51B-79877",
                "image" => "",
                "total_seat" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
