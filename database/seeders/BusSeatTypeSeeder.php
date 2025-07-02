<?php

namespace Database\Seeders;

use App\Models\BusSeatType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusSeatTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        BusSeatType::insert([

            // Xe 1
            [
                'bus_id' => 1,
                'seat_type_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bus_id' => 1,
                'seat_type_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bus_id' => 1,
                'seat_type_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Xe 2
            [
                'bus_id' => 2,
                'seat_type_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bus_id' => 2,
                'seat_type_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bus_id' => 2,
                'seat_type_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
