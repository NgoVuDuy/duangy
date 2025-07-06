<?php

namespace App\Livewire\Admin;

use App\Http\Controllers\BusOperatorController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TripController;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
class Trip extends Component
{
    public $trips = [];
    public $routes = [];
    public $buses = [];

    // Các giá trị từ form
    public $route_value;
    public $bus_value;
    public $departure_value;
    public $arrival_value;
    public $price_value;

    public function mount()
    {

        $busOperator = new BusOperatorController();
        $routeController = new RouteController();
        $busOperator = new BusOperatorController();

        $this->trips = $busOperator->showTrips('19001980')->getData();
        $this->buses = $busOperator->showBuses('19001980')->getData();
        $this->routes = $routeController->index()->getData();

        // dd($this->trips); 
    }

    public function save()
    {


        if (!empty($this->route_value) && !empty($this->bus_value) && !empty($this->departure_value) && !empty($this->arrival_value) && !empty($this->price_value)) {

            list($departure_date, $departure_time) = explode('T', $this->departure_value);
            list($arrival_date, $arrival_time) = explode('T', $this->arrival_value);

            $tripController = new TripController();

            $response = $tripController->store($this->bus_value, $this->route_value, $departure_date, $departure_time, $arrival_time, $arrival_date, "pending", $this->price_value)->getData();

            $busOperator = new BusOperatorController();
            $this->trips = $busOperator->showTrips('19001980')->getData();
            
            if ($response->code == 1) {

                $this->dispatch('add-trip-success');
            }
        }
    }

    public function delete_trip($id)
    {
        $tripController = new TripController();

        $tripController->destroy($id);

        $busOperator = new BusOperatorController();
        $this->trips = $busOperator->showTrips('19001980')->getData();

        $this->dispatch('delete-trip-success');
    }

    public function render()
    {
        return view('livewire.admin.trip');
    }
}
