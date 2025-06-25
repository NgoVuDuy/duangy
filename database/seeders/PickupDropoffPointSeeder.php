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
//Cần Thơ-Cà Mau
            [
                'trip_id' => 1,
                'name' => 'Cần Thơ (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '06:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 1,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, QL 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '06:45',
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
                'time' => '11:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 1,
                'name' => 'Bến xe Hộ Phòng',
                'address' => 'QL1A, Hộ Phòng, Giá Rai, Bạc Liêu, Vietnam, Giá Rai, Bạc Liêu',
                'time' => '11:35',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 2,
                'name' => 'Cần Thơ (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '12:00',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 2,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, QL 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '12:15',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 2,
                'name' => 'Bến xe Cà Mau',
                'address' => 'Quốc Lộ 1A, Lý Thường Kiệt, Khóm 5, Phường 6, Cà Mau, Cà Mau',
                'time' => '16:00',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 2,
                'name' => 'Bến xe Hộ Phòng',
                'address' => 'QL1A, Hộ Phòng, Giá Rai, Bạc Liêu, Vietnam, Giá Rai, Bạc Liêu',
                'time' => '16:10',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 3,
                'name' => 'Cần Thơ (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '16:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 3,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, QL 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '16:45',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 3,
                'name' => 'Bến xe Cà Mau',
                'address' => 'Quốc Lộ 1A, Lý Thường Kiệt, Khóm 5, Phường 6, Cà Mau, Cà Mau',
                'time' => '22:10',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 3,
                'name' => 'Bến xe Hộ Phòng',
                'address' => 'QL1A, Hộ Phòng, Giá Rai, Bạc Liêu, Vietnam, Giá Rai, Bạc Liêu',
                'time' => '22:00',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
//Cà Mau-Cần Thơ
            [
                'trip_id' => 4,
                'name' => 'Bến xe khách Cà Mau',
                'address' => 'QL1A, Phường 6, Cà Mau, Cà Mau',
                'time' => '08:00',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 4,
                'name' => 'Tiệm Vàng Quốc An 2',
                'address' => '94 QL1A, Tắc Vân, Thành phố Cà Mau, Cà Mau, Xã Tắc Vân, Cà Mau, Cà Mau',
                'time' => '08:45',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 4,
                'name' => 'Quán Cà phê Phượng Hồng (Gần Cổng Ra BXTT Cần Thơ)',
                'address' => 'Hưng Thạnh, Cái Răng, Cần Thơ, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '11:45',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 4,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, QL 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '12:00',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 5,
                'name' => 'Bến xe khách Cà Mau',
                'address' => 'QL1A, Phường 6, Cà Mau, Cà Mau',
                'time' => '12:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 5,
                'name' => 'Tiệm Vàng Quốc An 2',
                'address' => '94 QL1A, Tắc Vân, Thành phố Cà Mau, Cà Mau, Xã Tắc Vân, Cà Mau, Cà Mau',
                'time' => '12:45',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 5,
                'name' => 'Quán Cà phê Phượng Hồng (Gần Cổng Ra BXTT Cần Thơ)',
                'address' => 'Hưng Thạnh, Cái Răng, Cần Thơ, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '17:15',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 5,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, QL 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '17:00',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 6,
                'name' => 'Bến xe khách Cà Mau',
                'address' => 'QL1A, Phường 6, Cà Mau, Cà Mau',
                'time' => '17:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 6,
                'name' => 'Tiệm Vàng Quốc An 2',
                'address' => '94 QL1A, Tắc Vân, Thành phố Cà Mau, Cà Mau, Xã Tắc Vân, Cà Mau, Cà Mau',
                'time' => '17:45',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 6,
                'name' => 'Quán Cà phê Phượng Hồng (Gần Cổng Ra BXTT Cần Thơ)',
                'address' => 'Hưng Thạnh, Cái Răng, Cần Thơ, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '21:45',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 6,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, QL 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '22:00',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

//Cần Thơ- Sóc Trăng
            [
                'trip_id' => 7,
                'name' => 'Cần Thơ (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '08:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 7,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '08:45',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 7,
                'name' => 'Sóc Trăng (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc lộ 1A, Phường 3, Sóc Trăng, Sóc Trăng',
                'time' => '11:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 7,
                'name' => 'Bến xe Trần Đề',
                'address' => 'Đường 1 Tháng 5 , Thị trấn Trần Đề, Trần Đề, Sóc Trăng',
                'time' => '11:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 8,
                'name' => 'Cần Thơ (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '11:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 8,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '11:45',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 8,
                'name' => 'Sóc Trăng (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc lộ 1A, Phường 3, Sóc Trăng, Sóc Trăng',
                'time' => '15:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 8,
                'name' => 'Bến xe Trần Đề',
                'address' => 'Đường 1 Tháng 5 , Thị trấn Trần Đề, Trần Đề, Sóc Trăng',
                'time' => '15:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 9,
                'name' => 'Cần Thơ (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '17:00',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 9,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '17:10',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 9,
                'name' => 'Sóc Trăng (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc lộ 1A, Phường 3, Sóc Trăng, Sóc Trăng',
                'time' => '19:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 9,
                'name' => 'Bến xe Trần Đề',
                'address' => 'Đường 1 Tháng 5 , Thị trấn Trần Đề, Trần Đề, Sóc Trăng',
                'time' => '19:20',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
//Sóc Trăng- Cần Thơ
            [
                'trip_id' => 10,
                'name' => 'Sóc Trăng (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc lộ 1A, Phường 3, Sóc Trăng, Sóc Trăng',
                'time' => '07:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 10,
                'name' => 'Bến xe Trần Đề',
                'address' => 'Đường 1 Tháng 5 , Thị trấn Trần Đề, Trần Đề, Sóc Trăng',
                'time' => '07:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 10,
                'name' => 'Cần Thơ (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '10:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 10,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '10:45',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 11,
                'name' => 'Sóc Trăng (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc lộ 1A, Phường 3, Sóc Trăng, Sóc Trăng',
                'time' => '11:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 11,
                'name' => 'Bến xe Trần Đề',
                'address' => 'Đường 1 Tháng 5 , Thị trấn Trần Đề, Trần Đề, Sóc Trăng',
                'time' => '11:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 11,
                'name' => 'Cần Thơ (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '14:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 11,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '14:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 12,
                'name' => 'Sóc Trăng (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc lộ 1A, Phường 3, Sóc Trăng, Sóc Trăng',
                'time' => '16:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 12,
                'name' => 'Bến xe Trần Đề',
                'address' => 'Đường 1 Tháng 5 , Thị trấn Trần Đề, Trần Đề, Sóc Trăng',
                'time' => '16:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 12,
                'name' => 'Cần Thơ (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '19:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 12,
                'name' => 'Bến xe trung tâm Cần Thơ',
                'address' => 'Khu Đô Thị Nam Cần Thơ, Dọc Quốc Lộ 1A, Phường Hưng Thạnh, Cái Răng, Cần Thơ',
                'time' => '19:45',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

//Sóc Trăng - Bạc Liêu
//Bạc Liêu- Sóc Trăng
//An Giang- Vĩnh Long
//Vĩnh Long-An Giang
//Bến Tre-Đồng Tháp
//Đồng Tháp-Bến Tre
//Kiên Giang-Long An
//Long An- Kiên Giang
//Tiền Giang- Trà Vinh
//Trà Vinh- Tiền Giang

            

        ]);
    }
}
