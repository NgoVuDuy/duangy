<?php

namespace App\Livewire;

use App\Http\Controllers\RouteController;
use App\Mail\UserMail;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\Attributes\Url;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class TripSearchForm extends Component
{

    public $routes = []; // Danh sách chuyến đi

    public $start_points = []; // Các điểm bắt đầu
    public $end_points = []; // Các điểm kết thúc

    // Các lựa chọn hiện tại
    #[Url]
    public $start_point_value = '';
    #[Url]
    public $end_point_value = '';
    #[Url]
    public $date_value = '';

    public $today; // Ngày hiện tại


    public function mount()
    {

        // $this->date_value = Carbon::today()->format('Y-m-d');

        $this->today = Carbon::today()->format('Y-m-d');


        $routeController = new RouteController();

        // $this->start_points = $routeController->search_start_point($this->start_point_value, $this->end_point_value)->getData();
        // $this->end_points = $routeController->search_end_point($this->start_point_value, $this->end_point_value)->getData();
    }
    
    public function getStartPoint()
    {

        $routeController = new RouteController();
        $this->start_points = $routeController->search_start_point($this->start_point_value, $this->end_point_value)->getData();
    }
    public function getEndPoint()
    {

        $routeController = new RouteController();
        $this->end_points = $routeController->search_end_point($this->start_point_value, $this->end_point_value)->getData();
    }

    public function setStartPointValue($value)
    {
        // $routeController = new RouteController();
// 
        $this->start_point_value = $value;
        // $this->end_points = $routeController->search_end_point($this->start_point_value, $this->end_point_value)->getData();


        $this->dispatch('hide-start-point');
    }

    public function setEndPointValue($value)
    {
        // $routeController = new RouteController();

        $this->end_point_value = $value;
        // $this->start_points = $routeController->search_start_point($this->start_point_value, $this->end_point_value)->getData();

        $this->dispatch('hide-end-point');
    }

    // Ấn nút tìm kiếm
    public function trip_search()
    {
        if ($this->start_point_value == '' || $this->end_point_value == '' || $this->date_value == '') {

            return $this->js("alert('Vui lòng nhập đầy đủ thông tin tìm kiếm')");
        }

        // Redirect kèm query string
        return $this->redirect("/trips?start_point_value={$this->start_point_value}&end_point_value={$this->end_point_value}&date_value={$this->date_value}", navigate: true);
    }

    // Khi dữ liệu ô input về điểm bắt đầu thay đổi
    public function updatedStartPointValue($value)
    {

        $routeController = new RouteController();

        $this->start_points = $routeController->search_start_point($value, $this->end_point_value)->getData();
        // $this->end_points = $routeController->search_end_point($value, $this->end_point_value)->getData();
    }

    public function updatedEndPointValue($value)
    {
        $routeController = new RouteController();

        $this->end_points = $routeController->search_end_point($this->start_point_value, $value)->getData();
        // $this->start_points = $routeController->search_start_point($this->start_point_value, $value)->getData();
    }



    public function render()
    {
        return view('livewire.trip-search-form');
    }
}
