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
                "bus_operator_phone" => '19001980',
                "bus_type" => "Giường nằm",
                "license_plate" => "51B-79834",
                "image" => "bus-1.jpg",
                "total_seat" => 19,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_operator_phone" => '19001980',
                "bus_type" => "Ghế ngồi",
                "license_plate" => "51B-79877",
                "image" => "bus-2.jpg",
                "total_seat" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_operator_phone" => '19002019',
                "bus_type" => "Ghế ngồi",
                "license_plate" => "59B-81899",
                "image" => "bus-3.jpg",
                "total_seat" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_operator_phone" => '19002019',
                "bus_type" => "Giường nằm",
                "license_plate" => "59B-89296",
                "image" => "bus-4.jpg",
                "total_seat" => 19,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_operator_phone" => '19009091',
                "bus_type" => "Ghế ngồi",
                "license_plate" => "55B-69387",
                "image" => "bus-5.jpg",
                "total_seat" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_operator_phone" => '19009091',
                "bus_type" => "Giường nằm",
                "license_plate" => "55B-80819",
                "image" => "bus-6.jpg",
                "total_seat" => 19,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
