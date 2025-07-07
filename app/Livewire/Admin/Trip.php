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

    // Các giá trị cần cập nhật
    public $route_update;
    public $trip_update;
    public $bus_update;
    public $departure_update;
    public $arrival_update;
    public $price_update;

    public $user;

    public function mount()
    {

        if(session()->get('admin')) {

            $this->user = session()->get('admin');
        }
        
        // dd($this->user);
        // else {
        //     abort(404);
        // }

        $busOperator = new BusOperatorController();
        $routeController = new RouteController();
        $busOperator = new BusOperatorController();

        $this->trips = $busOperator->showTrips($this->user->phone)->getData();
        $this->buses = $busOperator->showBuses($this->user->phone)->getData();
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
            $this->trips = $busOperator->showTrips($this->user->phone)->getData();

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
        $this->trips = $busOperator->showTrips($this->user->phone)->getData();

        $this->dispatch('delete-trip-success');
    }

    public function update_trip($id)
    {

        $tripController = new TripController();

        list($departure_date, $departure_time) = explode('T', $this->departure_update);
        list($arrival_date, $arrival_time) = explode('T', $this->arrival_update);

        $response = $tripController->update($id, $this->bus_update, $this->route_update, $departure_date, $departure_time, $arrival_time, $arrival_date, "pending", $this->price_update)->getData();

        $busOperator = new BusOperatorController();
        $this->trips = $busOperator->showTrips($this->user->phone)->getData();

        if ($response->code == 1) {

            $this->dispatch('update-trip-success');
        }
    }

    public function edit($id)
    {

        $tripController = new TripController();

        $trip = $tripController->show($id)->getData();

        if ($trip->code == 1) {
            $this->route_update = $trip->data->route_id;
            $this->bus_update = $trip->data->bus_id;
            $this->departure_update = $trip->data->departure_date . 'T' . $trip->data->departure_time;
            $this->arrival_update = $trip->data->arrival_date . 'T' . $trip->data->arrival_time;
            $this->price_update = $trip->data->price;
        }
    }

    public function render()
    {
        return view('livewire.admin.trip');
    }
}
