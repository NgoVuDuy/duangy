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
            [
                'trip_id' => 13,
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
                'trip_id' => 13,
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
                'trip_id' => 13,
                'name' => 'Trạm Hộ Phòng',
                'address' => '150 Quốc Lộ 1A, khóm 2 P.Hộ Phòng, Thị Xã Giá Rai, Tỉnh Bạc Liêu, Phường Hộ Phòng, Giá Rai, Bạc Liêu',
                'time' => '10:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 13,
                'name' => 'Bến xe Bạc Liêu',
                'address' => '522 Trần Phú, Phường 7, Bạc Liêu, Bạc Liêu',
                'time' => '10:45',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 14,
                'name' => 'Sóc Trăng (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc lộ 1A, Phường 3, Sóc Trăng, Sóc Trăng',
                'time' => '11:10',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 14,
                'name' => 'Bến xe Trần Đề',
                'address' => 'Đường 1 Tháng 5 , Thị trấn Trần Đề, Trần Đề, Sóc Trăng',
                'time' => '11:00',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 14,
                'name' => 'Trạm Hộ Phòng',
                'address' => '150 Quốc Lộ 1A, khóm 2 P.Hộ Phòng, Thị Xã Giá Rai, Tỉnh Bạc Liêu, Phường Hộ Phòng, Giá Rai, Bạc Liêu',
                'time' => '13:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 14,
                'name' => 'Bến xe Bạc Liêu',
                'address' => '522 Trần Phú, Phường 7, Bạc Liêu, Bạc Liêu',
                'time' => '13:45',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 15,
                'name' => 'Sóc Trăng (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc lộ 1A, Phường 3, Sóc Trăng, Sóc Trăng',
                'time' => '14:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 15,
                'name' => 'Bến xe Trần Đề',
                'address' => 'Đường 1 Tháng 5 , Thị trấn Trần Đề, Trần Đề, Sóc Trăng',
                'time' => '14:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 15,
                'name' => 'Trạm Hộ Phòng',
                'address' => '150 Quốc Lộ 1A, khóm 2 P.Hộ Phòng, Thị Xã Giá Rai, Tỉnh Bạc Liêu, Phường Hộ Phòng, Giá Rai, Bạc Liêu',
                'time' => '17:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 15,
                'name' => 'Bến xe Bạc Liêu',
                'address' => '522 Trần Phú, Phường 7, Bạc Liêu, Bạc Liêu',
                'time' => '17:45',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
//Bạc Liêu- Sóc Trăng
            [
                'trip_id' => 16,
                'name' => 'Trạm Hộ Phòng',
                'address' => '150 Quốc Lộ 1A, khóm 2 P.Hộ Phòng, Thị Xã Giá Rai, Tỉnh Bạc Liêu, Phường Hộ Phòng, Giá Rai, Bạc Liêu',
                'time' => '06:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 16,
                'name' => 'Bến xe Bạc Liêu',
                'address' => '522 Trần Phú, Phường 7, Bạc Liêu, Bạc Liêu',
                'time' => '06:45',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 16,
                'name' => 'Sóc Trăng (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc lộ 1A, Phường 3, Sóc Trăng, Sóc Trăng',
                'time' => '09:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 16,
                'name' => 'Bến xe Trần Đề',
                'address' => 'Đường 1 Tháng 5 , Thị trấn Trần Đề, Trần Đề, Sóc Trăng',
                'time' => '09:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 17,
                'name' => 'Trạm Hộ Phòng',
                'address' => '150 Quốc Lộ 1A, khóm 2 P.Hộ Phòng, Thị Xã Giá Rai, Tỉnh Bạc Liêu, Phường Hộ Phòng, Giá Rai, Bạc Liêu',
                'time' => '10:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 17,
                'name' => 'Bến xe Bạc Liêu',
                'address' => '522 Trần Phú, Phường 7, Bạc Liêu, Bạc Liêu',
                'time' => '10:45',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 17,
                'name' => 'Sóc Trăng (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc lộ 1A, Phường 3, Sóc Trăng, Sóc Trăng',
                'time' => '13:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 17,
                'name' => 'Bến xe Trần Đề',
                'address' => 'Đường 1 Tháng 5 , Thị trấn Trần Đề, Trần Đề, Sóc Trăng',
                'time' => '13:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 18,
                'name' => 'Trạm Hộ Phòng',
                'address' => '150 Quốc Lộ 1A, khóm 2 P.Hộ Phòng, Thị Xã Giá Rai, Tỉnh Bạc Liêu, Phường Hộ Phòng, Giá Rai, Bạc Liêu',
                'time' => '14:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 18,
                'name' => 'Bến xe Bạc Liêu',
                'address' => '522 Trần Phú, Phường 7, Bạc Liêu, Bạc Liêu',
                'time' => '14:45',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 18,
                'name' => 'Sóc Trăng (Dọc Quốc Lộ 1A)',
                'address' => 'Dọc Quốc lộ 1A, Phường 3, Sóc Trăng, Sóc Trăng',
                'time' => '16:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 18,
                'name' => 'Bến xe Trần Đề',
                'address' => 'Đường 1 Tháng 5 , Thị trấn Trần Đề, Trần Đề, Sóc Trăng',
                'time' => '17:00',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
//An Giang- Vĩnh Long
            [
                'trip_id' => 19,
                'name' => 'Tịnh Biên QL91',
                'address' => 'QL91, Tịnh Biên, Tịnh Biên, An Giang',
                'time' => '09:00',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 19,
                'name' => 'Thị trấn Nhà Bàng',
                'address' => 'Quốc lộ 91, Thị trấn Nhà Bàng, Tịnh Biên, An Giang',
                'time' => '09:15',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 19,
                'name' => 'Quán cơm 8 Ri',
                'address' => '73 Quốc lộ 80, Vĩnh Long, Vĩnh Long',
                'time' => '13:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 19,
                'name' => 'Vĩnh Long - Dọc Quốc Lộ 1A',
                'address' => 'Vĩnh Long - Dọc Quốc Lộ 1A, Phường 1, Vĩnh Long, Vĩnh Long',
                'time' => '13:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 20,
                'name' => 'Tịnh Biên QL91',
                'address' => 'QL91, Tịnh Biên, Tịnh Biên, An Giang',
                'time' => '15:00',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 20,
                'name' => 'Thị trấn Nhà Bàng',
                'address' => 'Quốc lộ 91, Thị trấn Nhà Bàng, Tịnh Biên, An Giang',
                'time' => '15:15',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 20,
                'name' => 'Quán cơm 8 Ri',
                'address' => '73 Quốc lộ 80, Vĩnh Long, Vĩnh Long',
                'time' => '19:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 20,
                'name' => 'Vĩnh Long - Dọc Quốc Lộ 1A',
                'address' => 'Vĩnh Long - Dọc Quốc Lộ 1A, Phường 1, Vĩnh Long, Vĩnh Long',
                'time' => '19:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 21,
                'name' => 'Tịnh Biên QL91',
                'address' => 'QL91, Tịnh Biên, Tịnh Biên, An Giang',
                'time' => '20:00',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 21,
                'name' => 'Thị trấn Nhà Bàng',
                'address' => 'Quốc lộ 91, Thị trấn Nhà Bàng, Tịnh Biên, An Giang',
                'time' => '20:15',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 21,
                'name' => 'Quán cơm 8 Ri',
                'address' => '73 Quốc lộ 80, Vĩnh Long, Vĩnh Long',
                'time' => '00:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 21,
                'name' => 'Vĩnh Long - Dọc Quốc Lộ 1A',
                'address' => 'Vĩnh Long - Dọc Quốc Lộ 1A, Phường 1, Vĩnh Long, Vĩnh Long',
                'time' => '00:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
//Vĩnh Long-An Giang
            [
                'trip_id' => 22,
                'name' => 'Quán cơm 8 Ri',
                'address' => '73 Quốc lộ 80, Vĩnh Long, Vĩnh Long',
                'time' => '06:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 22,
                'name' => 'Vĩnh Long - Dọc Quốc Lộ 1A',
                'address' => 'Vĩnh Long - Dọc Quốc Lộ 1A, Phường 1, Vĩnh Long, Vĩnh Long',
                'time' => '06:30',
                'type' => 'dpickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 22,
                'name' => 'Tịnh Biên QL91',
                'address' => 'QL91, Tịnh Biên, Tịnh Biên, An Giang',
                'time' => '11:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 22,
                'name' => 'Thị trấn Nhà Bàng',
                'address' => 'Quốc lộ 91, Thị trấn Nhà Bàng, Tịnh Biên, An Giang',
                'time' => '11:45',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 23,
                'name' => 'Quán cơm 8 Ri',
                'address' => '73 Quốc lộ 80, Vĩnh Long, Vĩnh Long',
                'time' => '11:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 23,
                'name' => 'Vĩnh Long - Dọc Quốc Lộ 1A',
                'address' => 'Vĩnh Long - Dọc Quốc Lộ 1A, Phường 1, Vĩnh Long, Vĩnh Long',
                'time' => '11:30',
                'type' => 'dpickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 23,
                'name' => 'Tịnh Biên QL91',
                'address' => 'QL91, Tịnh Biên, Tịnh Biên, An Giang',
                'time' => '16:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 23,
                'name' => 'Thị trấn Nhà Bàng',
                'address' => 'Quốc lộ 91, Thị trấn Nhà Bàng, Tịnh Biên, An Giang',
                'time' => '16:45',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 24,
                'name' => 'Quán cơm 8 Ri',
                'address' => '73 Quốc lộ 80, Vĩnh Long, Vĩnh Long',
                'time' => '16:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 24,
                'name' => 'Vĩnh Long - Dọc Quốc Lộ 1A',
                'address' => 'Vĩnh Long - Dọc Quốc Lộ 1A, Phường 1, Vĩnh Long, Vĩnh Long',
                'time' => '16:30',
                'type' => 'dpickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 24,
                'name' => 'Tịnh Biên QL91',
                'address' => 'QL91, Tịnh Biên, Tịnh Biên, An Giang',
                'time' => '23:00',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 24,
                'name' => 'Thị trấn Nhà Bàng',
                'address' => 'Quốc lộ 91, Thị trấn Nhà Bàng, Tịnh Biên, An Giang',
                'time' => '23:15',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
//Bến Tre-Đồng Tháp
            [
                'trip_id' => 25,
                'name' => 'Nội thành thành phố Bến Tre',
                'address' => 'P. Phú Khương, Ben Tre, Vietnam, Phường Phú Tân, Bến Tre, Bến Tre',
                'time' => '07:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 25,
                'name' => 'Cây xăng Phú Khương',
                'address' => '63 Đại Lộ Đồng Khởi, Phường Phú Khương, Bến Tre, Bến Tre',
                'time' => '07:30',
                'type' => 'dpickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 25,
                'name' => 'Sa Đéc',
                'address' => 'DT825B, Xã Tân Quy Tây, Sa Đéc, Đồng Tháp',
                'time' => '11:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 25,
                'name' => 'Bến xe thị xã Hồng Ngự',
                'address' => '88 Đường Lê Lợi, Phường An Thạnh, Thị xã Hồng Ngự, Đồng Tháp',
                'time' => '11:45',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 26,
                'name' => 'Nội thành thành phố Bến Tre',
                'address' => 'P. Phú Khương, Ben Tre, Vietnam, Phường Phú Tân, Bến Tre, Bến Tre',
                'time' => '12:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 26,
                'name' => 'Cây xăng Phú Khương',
                'address' => '63 Đại Lộ Đồng Khởi, Phường Phú Khương, Bến Tre, Bến Tre',
                'time' => '12:30',
                'type' => 'dpickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 26,
                'name' => 'Sa Đéc',
                'address' => 'DT825B, Xã Tân Quy Tây, Sa Đéc, Đồng Tháp',
                'time' => '16:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 26,
                'name' => 'Bến xe thị xã Hồng Ngự',
                'address' => '88 Đường Lê Lợi, Phường An Thạnh, Thị xã Hồng Ngự, Đồng Tháp',
                'time' => '16:45',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 27,
                'name' => 'Nội thành thành phố Bến Tre',
                'address' => 'P. Phú Khương, Ben Tre, Vietnam, Phường Phú Tân, Bến Tre, Bến Tre',
                'time' => '17:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 27,
                'name' => 'Cây xăng Phú Khương',
                'address' => '63 Đại Lộ Đồng Khởi, Phường Phú Khương, Bến Tre, Bến Tre',
                'time' => '17:30',
                'type' => 'dpickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 27,
                'name' => 'Sa Đéc',
                'address' => 'DT825B, Xã Tân Quy Tây, Sa Đéc, Đồng Tháp',
                'time' => '21:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 27,
                'name' => 'Bến xe thị xã Hồng Ngự',
                'address' => '88 Đường Lê Lợi, Phường An Thạnh, Thị xã Hồng Ngự, Đồng Tháp',
                'time' => '21:45',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
//Đồng Tháp-Bến Tre
            [
                'trip_id' => 28,
                'name' => 'Sa Đéc',
                'address' => 'DT825B, Xã Tân Quy Tây, Sa Đéc, Đồng Tháp',
                'time' => '06:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 28,
                'name' => 'Bến xe thị xã Hồng Ngự',
                'address' => '88 Đường Lê Lợi, Phường An Thạnh, Thị xã Hồng Ngự, Đồng Tháp',
                'time' => '06:50',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 28,
                'name' => 'Nội thành thành phố Bến Tre',
                'address' => 'P. Phú Khương, Ben Tre, Vietnam, Phường Phú Tân, Bến Tre, Bến Tre',
                'time' => '10:05',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 28,
                'name' => 'Cây xăng Phú Khương',
                'address' => '63 Đại Lộ Đồng Khởi, Phường Phú Khương, Bến Tre, Bến Tre',
                'time' => '10:15',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 29,
                'name' => 'Sa Đéc',
                'address' => 'DT825B, Xã Tân Quy Tây, Sa Đéc, Đồng Tháp',
                'time' => '11:00',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 29,
                'name' => 'Bến xe thị xã Hồng Ngự',
                'address' => '88 Đường Lê Lợi, Phường An Thạnh, Thị xã Hồng Ngự, Đồng Tháp',
                'time' => '10:50',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 29,
                'name' => 'Nội thành thành phố Bến Tre',
                'address' => 'P. Phú Khương, Ben Tre, Vietnam, Phường Phú Tân, Bến Tre, Bến Tre',
                'time' => '16:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 29,
                'name' => 'Cây xăng Phú Khương',
                'address' => '63 Đại Lộ Đồng Khởi, Phường Phú Khương, Bến Tre, Bến Tre',
                'time' => '16:35',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 30,
                'name' => 'Sa Đéc',
                'address' => 'DT825B, Xã Tân Quy Tây, Sa Đéc, Đồng Tháp',
                'time' => '17:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 30,
                'name' => 'Bến xe thị xã Hồng Ngự',
                'address' => '88 Đường Lê Lợi, Phường An Thạnh, Thị xã Hồng Ngự, Đồng Tháp',
                'time' => '17:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 30,
                'name' => 'Nội thành thành phố Bến Tre',
                'address' => 'P. Phú Khương, Ben Tre, Vietnam, Phường Phú Tân, Bến Tre, Bến Tre',
                'time' => '21:10',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 30,
                'name' => 'Cây xăng Phú Khương',
                'address' => '63 Đại Lộ Đồng Khởi, Phường Phú Khương, Bến Tre, Bến Tre',
                'time' => '21:15',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
//Kiên Giang-Long An
            [
                'trip_id' => 31,
                'name' => 'Bến Xe Rạch Sỏi',
                'address' => '168 Đường Mai Thị Hồng Hạnh, P. Rạch Sỏi, Phường Rạch Sỏi, Rạch Giá, Kiên Giang',
                'time' => '08:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 31,
                'name' => 'VP Rạch Giá',
                'address' => 'SH3 Căn 16 Đường Mai Chí Thọ, Khu đô thị Phú Gia, Rạch Giá, Kiên Giang, Phường An Hòa, Rạch Giá, Kiên Giang',
                'time' => '08:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 31,
                'name' => 'Trạm Thu Phí Bến Lức',
                'address' => 'Trạm Thu Phí Bến Lức, Xã An Thạnh, Bến Lức, Long An',
                'time' => '13:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 31,
                'name' => 'Trạm Thu Phí Tân An',
                'address' => 'Trạm Thu Phí Tân An, Xã Lợi Bình Nhơn, Tân An, Long An',
                'time' => '13:15',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 32,
                'name' => 'Bến Xe Rạch Sỏi',
                'address' => '168 Đường Mai Thị Hồng Hạnh, P. Rạch Sỏi, Phường Rạch Sỏi, Rạch Giá, Kiên Giang',
                'time' => '13:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 32,
                'name' => 'VP Rạch Giá',
                'address' => 'SH3 Căn 16 Đường Mai Chí Thọ, Khu đô thị Phú Gia, Rạch Giá, Kiên Giang, Phường An Hòa, Rạch Giá, Kiên Giang',
                'time' => '13:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 32,
                'name' => 'Trạm Thu Phí Bến Lức',
                'address' => 'Trạm Thu Phí Bến Lức, Xã An Thạnh, Bến Lức, Long An',
                'time' => '18:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 32,
                'name' => 'Trạm Thu Phí Tân An',
                'address' => 'Trạm Thu Phí Tân An, Xã Lợi Bình Nhơn, Tân An, Long An',
                'time' => '18:25',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 33,
                'name' => 'Bến Xe Rạch Sỏi',
                'address' => '168 Đường Mai Thị Hồng Hạnh, P. Rạch Sỏi, Phường Rạch Sỏi, Rạch Giá, Kiên Giang',
                'time' => '18:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 33,
                'name' => 'VP Rạch Giá',
                'address' => 'SH3 Căn 16 Đường Mai Chí Thọ, Khu đô thị Phú Gia, Rạch Giá, Kiên Giang, Phường An Hòa, Rạch Giá, Kiên Giang',
                'time' => '18:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 33,
                'name' => 'Trạm Thu Phí Bến Lức',
                'address' => 'Trạm Thu Phí Bến Lức, Xã An Thạnh, Bến Lức, Long An',
                'time' => '23:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 33,
                'name' => 'Trạm Thu Phí Tân An',
                'address' => 'Trạm Thu Phí Tân An, Xã Lợi Bình Nhơn, Tân An, Long An',
                'time' => '23:15',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
//Long An- Kiên Giang
            [
                'trip_id' => 34,
                'name' => 'Trạm Thu Phí Bến Lức',
                'address' => 'Trạm Thu Phí Bến Lức, Xã An Thạnh, Bến Lức, Long An',
                'time' => '09:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 34,
                'name' => 'Trạm Thu Phí Tân An',
                'address' => 'Trạm Thu Phí Tân An, Xã Lợi Bình Nhơn, Tân An, Long An',
                'time' => '09:45',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 34,
                'name' => 'Bến Xe Rạch Sỏi',
                'address' => '168 Đường Mai Thị Hồng Hạnh, P. Rạch Sỏi, Phường Rạch Sỏi, Rạch Giá, Kiên Giang',
                'time' => '14:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 34,
                'name' => 'VP Rạch Giá',
                'address' => 'SH3 Căn 16 Đường Mai Chí Thọ, Khu đô thị Phú Gia, Rạch Giá, Kiên Giang, Phường An Hòa, Rạch Giá, Kiên Giang',
                'time' => '14:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],


            [
                'trip_id' => 35,
                'name' => 'Trạm Thu Phí Bến Lức',
                'address' => 'Trạm Thu Phí Bến Lức, Xã An Thạnh, Bến Lức, Long An',
                'time' => '15:10',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 35,
                'name' => 'Trạm Thu Phí Tân An',
                'address' => 'Trạm Thu Phí Tân An, Xã Lợi Bình Nhơn, Tân An, Long An',
                'time' => '15:00',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 35,
                'name' => 'Bến Xe Rạch Sỏi',
                'address' => '168 Đường Mai Thị Hồng Hạnh, P. Rạch Sỏi, Phường Rạch Sỏi, Rạch Giá, Kiên Giang',
                'time' => '19:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 35,
                'name' => 'VP Rạch Giá',
                'address' => 'SH3 Căn 16 Đường Mai Chí Thọ, Khu đô thị Phú Gia, Rạch Giá, Kiên Giang, Phường An Hòa, Rạch Giá, Kiên Giang',
                'time' => '19:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 36,
                'name' => 'Trạm Thu Phí Bến Lức',
                'address' => 'Trạm Thu Phí Bến Lức, Xã An Thạnh, Bến Lức, Long An',
                'time' => '20:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 36,
                'name' => 'Trạm Thu Phí Tân An',
                'address' => 'Trạm Thu Phí Tân An, Xã Lợi Bình Nhơn, Tân An, Long An',
                'time' => '20:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 36,
                'name' => 'Bến Xe Rạch Sỏi',
                'address' => '168 Đường Mai Thị Hồng Hạnh, P. Rạch Sỏi, Phường Rạch Sỏi, Rạch Giá, Kiên Giang',
                'time' => '01:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 36,
                'name' => 'VP Rạch Giá',
                'address' => 'SH3 Căn 16 Đường Mai Chí Thọ, Khu đô thị Phú Gia, Rạch Giá, Kiên Giang, Phường An Hòa, Rạch Giá, Kiên Giang',
                'time' => '01:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
//Tiền Giang- Trà Vinh
            [
                'trip_id' => 37,
                'name' => 'Trung Lương',
                'address' => 'Ấp Bắc, Phường 10, Mỹ Tho, Tiền Giang',
                'time' => '07:00',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 37,
                'name' => 'Ngã 3 Trung Lương',
                'address' => '92 Quốc lộ 1A, Phường 10, Mỹ Tho, Tiền Giang',
                'time' => '07:10',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 37,
                'name' => 'Trạm Trà Vinh',
                'address' => 'Cây xăng Tân Thanh Thủy, Phường 8, Trà Vinh, Trà Vinh',
                'time' => '12:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 37,
                'name' => 'Trường Huỳnh Anh',
                'address' => 'ấp 3, xã An Trường, Xã An Trường, Càng Long, Trà Vinh',
                'time' => '12:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 38,
                'name' => 'Trung Lương',
                'address' => 'Ấp Bắc, Phường 10, Mỹ Tho, Tiền Giang',
                'time' => '12:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 38,
                'name' => 'Ngã 3 Trung Lương',
                'address' => '92 Quốc lộ 1A, Phường 10, Mỹ Tho, Tiền Giang',
                'time' => '12:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 38,
                'name' => 'Trạm Trà Vinh',
                'address' => 'Cây xăng Tân Thanh Thủy, Phường 8, Trà Vinh, Trà Vinh',
                'time' => '18:40',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 38,
                'name' => 'Trường Huỳnh Anh',
                'address' => 'ấp 3, xã An Trường, Xã An Trường, Càng Long, Trà Vinh',
                'time' => '18:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 39,
                'name' => 'Trung Lương',
                'address' => 'Ấp Bắc, Phường 10, Mỹ Tho, Tiền Giang',
                'time' => '20:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 39,
                'name' => 'Ngã 3 Trung Lương',
                'address' => '92 Quốc lộ 1A, Phường 10, Mỹ Tho, Tiền Giang',
                'time' => '20:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 39,
                'name' => 'Trạm Trà Vinh',
                'address' => 'Cây xăng Tân Thanh Thủy, Phường 8, Trà Vinh, Trà Vinh',
                'time' => '01:00',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 39,
                'name' => 'Trường Huỳnh Anh',
                'address' => 'ấp 3, xã An Trường, Xã An Trường, Càng Long, Trà Vinh',
                'time' => '01:10',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
//Trà Vinh- Tiền Giang
            [
                'trip_id' => 40,
                'name' => 'Trạm Trà Vinh',
                'address' => 'Cây xăng Tân Thanh Thủy, Phường 8, Trà Vinh, Trà Vinh',
                'time' => '07:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 40,
                'name' => 'Trường Huỳnh Anh',
                'address' => 'ấp 3, xã An Trường, Xã An Trường, Càng Long, Trà Vinh',
                'time' => '07:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 40,
                'name' => 'Trung Lương',
                'address' => 'Ấp Bắc, Phường 10, Mỹ Tho, Tiền Giang',
                'time' => '12:00',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 40,
                'name' => 'Ngã 3 Trung Lương',
                'address' => '92 Quốc lộ 1A, Phường 10, Mỹ Tho, Tiền Giang',
                'time' => '12:10',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'trip_id' => 41,
                'name' => 'Trạm Trà Vinh',
                'address' => 'Cây xăng Tân Thanh Thủy, Phường 8, Trà Vinh, Trà Vinh',
                'time' => '12:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 41,
                'name' => 'Trường Huỳnh Anh',
                'address' => 'ấp 3, xã An Trường, Xã An Trường, Càng Long, Trà Vinh',
                'time' => '12:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 41,
                'name' => 'Trung Lương',
                'address' => 'Ấp Bắc, Phường 10, Mỹ Tho, Tiền Giang',
                'time' => '17:20',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 41,
                'name' => 'Ngã 3 Trung Lương',
                'address' => '92 Quốc lộ 1A, Phường 10, Mỹ Tho, Tiền Giang',
                'time' => '17:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            

            [
                'trip_id' => 42,
                'name' => 'Trạm Trà Vinh',
                'address' => 'Cây xăng Tân Thanh Thủy, Phường 8, Trà Vinh, Trà Vinh',
                'time' => '17:40',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 42,
                'name' => 'Trường Huỳnh Anh',
                'address' => 'ấp 3, xã An Trường, Xã An Trường, Càng Long, Trà Vinh',
                'time' => '17:30',
                'type' => 'pickup',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 42,
                'name' => 'Trung Lương',
                'address' => 'Ấp Bắc, Phường 10, Mỹ Tho, Tiền Giang',
                'time' => '23:20',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'trip_id' => 42,
                'name' => 'Ngã 3 Trung Lương',
                'address' => '92 Quốc lộ 1A, Phường 10, Mỹ Tho, Tiền Giang',
                'time' => '23:30',
                'type' => 'dropoff',
                'latitude' => '0',
                'longitude' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],

        ]);
    }
}
