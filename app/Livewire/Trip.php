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

    public function mount() {

        // Gọi hàm tìm kiếm chuyến đi trong tripcontroller
        $tripController = new TripController();

        $this->trips = $tripController->search($this->start_point_value, $this->end_point_value, $this->date_value)->getData();

        // dd($this->trips);
        foreach($this->trips as $i => $trip) {

            $this->isShowPoints[$i] = false;
        }


    }

    public function show_points( $i) {

        $this->isShowPoints[$i] = true;

    }
    public function hide_points(string $i) {
        
        $this->isShowPoints[$i] = false;

    }

    // Ấn nút tiếp tục
    public function show_booking_confirmation() {
        
        return $this->redirect('/bookingconfirmation', navigate:true);
    }

    public function render()
    {
        return view('livewire.trip');
    }
}
