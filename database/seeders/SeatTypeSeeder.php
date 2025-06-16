<?php

namespace Database\Seeders;

use App\Models\SeatType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeatTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SeatType::insert([
            [
                'name' => 'Ghế đầu',
                'extra_price' => '20.000',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Ghế giữa',
                'extra_price' => '30.000',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Ghế cuối',
                'extra_price' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
