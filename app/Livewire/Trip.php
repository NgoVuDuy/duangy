<?php

namespace App\Livewire;

use App\Http\Controllers\TripController;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;

#[Title('Kết quả tìm kiếm chuyến xe')]
class Trip extends Component
{
    // Các tham số tìm kiếm chuyến đi
    #[Url]
    public $start_point_value = '';
    #[Url]
    public $end_point_value = '';
    #[Url]
    public $date_value = '';

    public $trips = []; // Danh sách chuyến đi
    public $isShowPoints = []; // Hiển thị điểm đón trả

    public $seat_options = []; // Thông tin ghế ngồi của người dùng đã chọn

    public $seat_list = []; // Danh sách các ghế đang được chọn
    public $seat_price = []; // Danh sách tiền ứng với ghế

    public $pickup_id = 0;
    public $dropoff_id = 0;

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

    public function show_points($i)
    {
        // Kiểm tra xem người dùng đã chọn ghế chưa
        if (empty($this->seat_list)) {
            return $this->js("alert('Vui lòng chọn ghế')");
        }

        $this->isShowPoints[$i] = true;
    }
    public function hide_points(string $i)
    {

        $this->isShowPoints[$i] = false;
    }

    // Ấn nút tiếp tục
    public function show_booking_confirmation()
    {

        if($this->pickup_id == null || $this->dropoff_id == null) {
            
            return $this->js("alert('Vui lòng chọn điểm đón trả')");
        }

        return $this->redirect('/bookingconfirmation', navigate: true);
    }

    // Thêm ghế vào mảng các ghế đang chọn
    public function setSeat($seat, $price)
    {

        // Kiểm tra xem ghế đó có trong mảng chưa - đã chọn chưa
        // Nếu ghế chưa chọn
        if (!array_key_exists($seat, $this->seat_list)) {

            $this->seat_list[$seat] = $price;
            // $this->seat_price[] = $price;
        } else {
            // Xóa ghế
            unset($this->seat_list[$seat]);
        }
    }

    public function render()
    {
        return view('livewire.trip');
    }
}
