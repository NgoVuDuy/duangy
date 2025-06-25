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
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'start_point' => 'Cà Mau',
                    'end_point' => 'Cần Thơ',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'start_point' => 'Cần Thơ',
                    'end_point' => 'Sóc Trăng',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Sóc Trăng',
                    'end_point' => 'Cần Thơ',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Sóc Trăng',
                    'end_point' => 'Bạc Liêu',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Bạc Liêu',
                    'end_point' => 'Sóc Trăng',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'An Giang',
                    'end_point' => 'Vĩnh Long',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Vĩnh Long',
                    'end_point' => 'An Giang',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Bến Tre',
                    'end_point' => 'Đồng Tháp',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Đồng Tháp',
                    'end_point' => 'Bến Tre',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Kiên Giang',
                    'end_point' => 'Long An',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Long An',
                    'end_point' => 'Kiên Giang',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Tiền Giang',
                    'end_point' => 'Trà Vinh',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'start_point' => 'Trà Vinh',
                    'end_point' => 'Tiền Giang',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]
        );
    }
}
