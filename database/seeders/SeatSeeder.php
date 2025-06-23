<?php

namespace Database\Seeders;

use App\Models\Seat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Seat::insert([
            [
                'bus_seat_type_id' => 1,
                'name' => 'A1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bus_seat_type_id' => 2,
                'name' => 'A2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bus_seat_type_id' => 2,
                'name' => 'A3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bus_seat_type_id' => 2,
                'name' => 'A4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bus_seat_type_id' => 2,
                'name' => 'A5',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bus_seat_type_id' => 3,
                'name' => 'A6',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bus_seat_type_id' => 3,
                'name' => 'A7',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
