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
