<?php

namespace App\Livewire;

use App\Http\Controllers\PickupDropoffPointController;
use App\Http\Controllers\TripController;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;

#[Title('Kết quả tìm kiếm chuyến xe')]
class Trip extends Component
{
    // Các tham số tìm kiếm chuyến đi
    #[Url]
    public $start_point_value = ''; // Tên điểm bắt đầu
    #[Url]
    public $end_point_value = ''; // Tên điểm kết thúc
    #[Url]
    public $date_value = ''; // Thời gian khởi hành

    public $trips = []; // Danh sách chuyến đi tìm được
    public $isShowPoints = []; // Hiển thị điểm đón trả

    public $seat_options = []; // Thông tin ghế ngồi của người dùng đã chọn

    public $seat_list = []; // Danh sách các ghế đang được chọn
    public $seat_price = []; // Danh sách tiền ứng với ghế

    public $pickup_id = 0; // ID của điểm  đón
    public $dropoff_id = 0; // ID của điểm trả

    public $seat_id_list = []; // Mảng chứa danh sách id các ghế đã chọn

    public function mount()
    {

        // Gọi hàm tìm kiếm chuyến đi trong tripcontroller
        $tripController = new TripController();

        $this->trips = $tripController->search($this->start_point_value, $this->end_point_value, $this->date_value)->getData();

        // dd($this->trips);

        foreach ($this->trips as $i => $trip) {

            $this->isShowPoints[$i] = false;
        }
    }

    // Ấn nút tiếp tục
    public function show_points($i)
    {
        // dd($this->seat_id_list);
        // Kiểm tra xem người dùng đã chọn ghế chưa
        if (empty($this->seat_list)) {


            // return $this->js("alert('Vui lòng chọn ghế')");
            return $this->dispatch('not-seleted-seat');
        }

        $this->isShowPoints[$i] = true;
    }
    // Ấn nút quay lại
    public function hide_points(string $i)
    {
        $this->isShowPoints[$i] = false;
    }

    // Ấn nút tiếp tục
    public function show_booking_confirmation($trip_id, $trip_index)
    {

        if ($this->pickup_id == null || $this->dropoff_id == null) {

            // return $this->js("alert('Vui lòng chọn điểm đón trả')");
            return $this->dispatch('not-seleted-point');
        }
        // Lấy ra chi tiết điểm đón trả dựa vào id
        $pickupDropoffPointController = new PickupDropoffPointController();
        $pickup = $pickupDropoffPointController->show($this->pickup_id)->getData();
        $dropoff = $pickupDropoffPointController->show($this->dropoff_id)->getData();

        /// Tạo mảng session để lưu trữ vé - lưu id của các chỗ ngồi
        session()->put('ticket.seat_id', $this->seat_id_list);
        /// Tạo mảng session để lưu trữ vé - lưu thông tin của các chỗ ngồi
        session()->put('ticket.seat_list', $this->seat_list);

        /// Tạo mảng session để lưu trữ vé - lưu id của các điểm đón trả
        session()->put('ticket.pickup', ["id" => (int) $this->pickup_id, "name" => $pickup->name, "address" => $pickup->address, "time" => $pickup->time]);
        session()->put('ticket.dropoff', ["id" => (int) $this->dropoff_id, "name" => $dropoff->name, "address" => $dropoff->address, "time" => $dropoff->time]);

        /// Tạo mảng session để lưu trữ vé - lưu thông tin tuyến xe
        session()->put('ticket.routes', ["start" => $this->start_point_value, "end" => $this->end_point_value]);
        /// Tạo mảng session để lưu trữ vé - lưu thông tin của chuyến xe
        session()->put('ticket.trip', ["id" => $trip_id, "departure_time" => $this->trips[$trip_index]->departure_time, "departure_date" => $this->trips[$trip_index]->departure_date]);
        /// Tạo mảng session để lưu trữ vé - lưu thông tin của nhà xe
        session()->put('ticket.bus_operator', $this->trips[$trip_index]->bus->bus_operator->name);

        /// Tạo mảng session để lưu trữ vé - lưu thông tin của loại xe
        session()->put('ticket.bus', $this->trips[$trip_index]->bus->bus_type);

        session()->put('ticket.bus_license_plate', $this->trips[$trip_index]->bus->license_plate);



        return $this->redirect('/bookingconfirmation', navigate: true);
    }

    // Thêm ghế vào mảng các ghế đang chọn
    public function setSeat($id, $seat, $price)
    {

        // Kiểm tra xem ghế đó có trong mảng chưa - đã chọn chưa
        // Nếu ghế chưa chọn
        if (!array_key_exists($seat, $this->seat_list)) {

            $this->seat_list[$seat] = $price;
            $this->seat_id_list[$seat] = $id;
        } else {
            // Xóa ghế
            unset($this->seat_list[$seat]);
            unset($this->seat_id_list[$seat]);
        }
    }

    public function render()
    {
        return view('livewire.trip');
    }
}
