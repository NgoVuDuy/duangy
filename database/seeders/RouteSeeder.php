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
                    'start_point' => 'Cần Thơ',
                    'end_point' => 'Cà Mau',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'start_point' => 'Cần Thơ',
                    'end_point' => 'Cà Mau',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]
            );
    }
}
