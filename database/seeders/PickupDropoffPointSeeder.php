<?php

namespace Database\Seeders;

use App\Models\PickupDropoffPoint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PickupDropoffPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        PickupDropoffPoint::insert([

            [
                'trip_id' => 1,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, QL 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '17:00',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 1,
                'name' => 'Bến xe Cà Mau',
                'address' => 'Quốc Lộ 1A, Lý Thường Kiệt, Khóm 5, Phường 6, Cà Mau, Cà Mau',
                'time' => '19:00',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 2,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, QL 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '17:00',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 2,
                'name' => 'Bến xe Đầm Dơi',
                'address' => 'Đầm Dơi, Cà Mau, Đầm Dơi, Cà Mau',
                'time' => '19:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

        ]);
    }
}
