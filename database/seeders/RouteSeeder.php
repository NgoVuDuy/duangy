<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Route::insert(

            [
                [
                    'start_point' => 'Cần Thơ',
                    'end_point' => 'Cà Mau',
                    'bus_operator_phone' => '19001980',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'start_point' => 'Cà Mau',
                    'end_point' => 'Cần Thơ',
                    'bus_operator_phone' => '19001980',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'start_point' => 'Cần Thơ',
                    'end_point' => 'Sóc Trăng',
                    'bus_operator_phone' => '19001980',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Sóc Trăng',
                    'end_point' => 'Cần Thơ',
                    'bus_operator_phone' => '19001980',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Sóc Trăng',
                    'end_point' => 'Bạc Liêu',
                    'bus_operator_phone' => '19001980',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Bạc Liêu',
                    'end_point' => 'Sóc Trăng',
                    'bus_operator_phone' => '19002019',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'An Giang',
                    'end_point' => 'Vĩnh Long',
                    'bus_operator_phone' => '19002019',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Vĩnh Long',
                    'end_point' => 'An Giang',
                    'bus_operator_phone' => '19002019',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Bến Tre',
                    'end_point' => 'Đồng Tháp',
                    'bus_operator_phone' => '19002019',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Đồng Tháp',
                    'end_point' => 'Bến Tre',
                    'bus_operator_phone' => '19002019',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Kiên Giang',
                    'end_point' => 'Long An',
                    'bus_operator_phone' => '19009091',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Long An',
                    'end_point' => 'Kiên Giang',
                    'bus_operator_phone' => '19009091',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Tiền Giang',
                    'end_point' => 'Trà Vinh',
                    'bus_operator_phone' => '19009091',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Trà Vinh',
                    'end_point' => 'Tiền Giang',
                    'bus_operator_phone' => '19009091',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]
        );
    }
}
