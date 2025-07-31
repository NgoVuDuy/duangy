<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Trip::insert([
//Cần Thơ-Cà Mau
            [
                "bus_id" => 1,
                "route_id" => 1,
                "departure_time" => "07:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "11:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "110.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 2,
                "route_id" => 1,
                "departure_time" => "12:30",
                "departure_date" => "2025-08-19",
                "arrival_time" => "16:00",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "120.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 3,
                "route_id" => 1,
                "departure_time" => "17:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "22:00",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "130.000",
                "created_at" => now(),
                "updated_at" => now()
            ],

//Cà Mau-Cần Thơ
            [
                "bus_id" => 4,
                "route_id" => 2,
                "departure_time" => "08:30",
                "departure_date" => "2025-08-19",
                "arrival_time" => "12:00",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "110.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 5,
                "route_id" => 2,
                "departure_time" => "13:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "17:00",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "120.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 6,
                "route_id" => 2,
                "departure_time" => "18:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "22:00",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "130.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
//Cần Thơ-Sóc Trăng
            [
                "bus_id" => 1,
                "route_id" => 3,
                "departure_time" => "09:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "11:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "100.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 2,
                "route_id" => 3,
                "departure_time" => "12:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "15:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "105.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 3,
                "route_id" => 3,
                "departure_time" => "17:30",
                "departure_date" => "2025-08-19",
                "arrival_time" => "19:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "110.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
//Sóc Trăng-Cần Thơ
            [
                "bus_id" => 4,
                "route_id" => 4,
                "departure_time" => "08:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "10:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "100.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 5,
                "route_id" => 4,
                "departure_time" => "12:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "14:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "110.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 6,
                "route_id" => 4,
                "departure_time" => "17:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "19:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "120.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
//Sóc Trăng-Bạc Liêu
            [
                "bus_id" => 1,
                "route_id" => 5,
                "departure_time" => "08:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "10:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "100.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 2,
                "route_id" => 5,
                "departure_time" => "11:30",
                "departure_date" => "2025-08-19",
                "arrival_time" => "13:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "100.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 3,
                "route_id" => 5,
                "departure_time" => "15:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "17:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "100.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
//Bạc Liêu-Sóc Trăng
            [
                "bus_id" => 4,
                "route_id" => 6,
                "departure_time" => "07:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "09:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "100.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 5,
                "route_id" => 6,
                "departure_time" => "11:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "13:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "100.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 6,
                "route_id" => 6,
                "departure_time" => "15:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "17:00",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "100.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
//An Giang-Vĩnh Long
            [
                "bus_id" => 1,
                "route_id" => 7,
                "departure_time" => "09:30",
                "departure_date" => "2025-08-19",
                "arrival_time" => "13:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "130.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 2,
                "route_id" => 7,
                "departure_time" => "15:30",
                "departure_date" => "2025-08-19",
                "arrival_time" => "19:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "140.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 3,
                "route_id" => 7,
                "departure_time" => "20:30",
                "departure_date" => "2025-08-19",
                "arrival_time" => "00:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "150.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
//Vĩnh Long-An Giang
            [
                "bus_id" => 4,
                "route_id" => 8,
                "departure_time" => "07:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "11:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "125.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 5,
                "route_id" => 8,
                "departure_time" => "12:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "16:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "130.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 6,
                "route_id" => 8,
                "departure_time" => "17:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "23:00",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "145.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
//Bến Tre- Đồng Tháp
            [
                "bus_id" => 1,
                "route_id" => 9,
                "departure_time" => "08:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "11:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "150.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 2,
                "route_id" => 9,
                "departure_time" => "13:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "16:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "160.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 3,
                "route_id" => 9,
                "departure_time" => "18:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "21:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "165.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
//Đồng Tháp- Bến Tre
            [
                "bus_id" => 4,
                "route_id" => 10,
                "departure_time" => "07:10",
                "departure_date" => "2025-08-19",
                "arrival_time" => "10:15",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "140.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 5,
                "route_id" => 10,
                "departure_time" => "11:20",
                "departure_date" => "2025-08-19",
                "arrival_time" => "16:35",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "150.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 6,
                "route_id" => 10,
                "departure_time" => "18:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "21:10",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "160.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
//Kiên Giang-Long An
            [
                "bus_id" => 1,
                "route_id" => 11,
                "departure_time" => "09:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "13:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "170.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 2,
                "route_id" => 11,
                "departure_time" => "14:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "18:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "180.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 3,
                "route_id" => 11,
                "departure_time" => "19:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "23:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "190.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
//Long An- Kiên Giang
            [
                "bus_id" => 4,
                "route_id" => 12,
                "departure_time" => "10:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "14:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "165.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 5,
                "route_id" => 12,
                "departure_time" => "15:30",
                "departure_date" => "2025-08-19",
                "arrival_time" => "19:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "175.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 6,
                "route_id" => 12,
                "departure_time" => "21:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "01:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "190.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
//Tiền Giang-Trà Vinh
            [
                "bus_id" => 1,
                "route_id" => 13,
                "departure_time" => "07:30",
                "departure_date" => "2025-08-19",
                "arrival_time" => "12:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "180.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 2,
                "route_id" => 13,
                "departure_time" => "13:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "18:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "190.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 3,
                "route_id" => 13,
                "departure_time" => "21:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "01:00",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "200.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
//Trà Vinh- Tiền Giang
            [
                "bus_id" => 4,
                "route_id" => 14,
                "departure_time" => "08:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "12:00",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "180.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 5,
                "route_id" => 14,
                "departure_time" => "13:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "17:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "190.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "bus_id" => 6,
                "route_id" => 14,
                "departure_time" => "18:00",
                "departure_date" => "2025-08-19",
                "arrival_time" => "23:30",
                "arrival_date" => "2025-08-20",
                "status" => "pending",
                "price" => "200.000",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ]);
    }
}
