<?php

namespace Database\Seeders;

use App\Models\BusOperatorBus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusOperatorBusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        BusOperatorBus::insert([
            [
                'bus_id' => 1,
                'bus_operator_id' => 1
            ],
            [
                'bus_id' => 2,
                'bus_operator_id' => 1
            ],
        ]);
    }
}
