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
                'name' => 'Hà Tuấn Travel',
                'phone' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Phát Đạt Travel',
                'phone' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bình Kinh Travel',
                'phone' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
