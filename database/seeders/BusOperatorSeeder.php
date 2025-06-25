<?php

namespace Database\Seeders;

use App\Models\BusOperator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusOperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        BusOperator::insert([
            [
                'name' => 'Tân Trào Travel',
                'phone' => '19001980',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'An Khang Travel',
                'phone' => '19002019',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Thịnh Phát Travel',
                'phone' => '19009091',
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);
    }
}
