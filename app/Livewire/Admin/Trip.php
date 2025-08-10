<?php

namespace App\Livewire\Admin;

use App\Http\Controllers\BusOperatorController;
use App\Http\Controllers\PickupDropoffPointController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TicketController;
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
    public $pickup_value;
    public $dropoff_value;

    // Các giá trị cần cập nhật
    public $route_update;
    public $trip_update;
    public $bus_update;
    public $departure_update;
    public $arrival_update;
    public $price_update;
    public $pickup_update;
    public $dropoff_update;

    public $pickupPoints = [];
    public $dropoffPoints = [];
    public $pickupSeleted = [];
    public $dropoffSeleted = [];

    public $pickupUpdatePoints = [];
    public $dropoffUpdatePoints = [];
    public $pickupUpdateSeleted = [];
    public $dropoffUpdateSeleted = [];

    public $user;

    public function mount()
    {

        if (session()->get('admin')) {

            $this->user = session()->get('admin');
        }

        $routeController = new RouteController();
        $busOperator = new BusOperatorController();
        $pickupDropoffPointsController = new PickupDropoffPointController();

        $this->trips = $busOperator->showTrips($this->user->phone)->getData(); // Lấy chuyến
        $this->buses = $busOperator->showBuses($this->user->phone)->getData(); // Lấy xe
        $this->pickupPoints = $pickupDropoffPointsController->index('pickup')->getData(); // Lấy điểm đón
        $this->dropoffPoints = $pickupDropoffPointsController->index('dropoff')->getData(); // Lấy điểm trả
        $this->routes = $routeController->index()->getData(); // Lấy tuyến

    }

    public function save()
    {

        // dd($this->pickupSeleted);

        if (!empty($this->route_value) && !empty($this->bus_value) && !empty($this->departure_value) && !empty($this->arrival_value) && !empty($this->price_value)) {

            list($departure_date, $departure_time) = explode('T', $this->departure_value);
            list($arrival_date, $arrival_time) = explode('T', $this->arrival_value);

            $tripController = new TripController();
            $response = $tripController->store($this->bus_value, $this->route_value, $departure_date, $departure_time, $arrival_time, $arrival_date, "pending", $this->price_value)->getData();

            $trip_id = $response->tripId;
            // Điểm đón trả
            if (!empty($this->pickupSeleted)) {
                foreach ($this->pickupSeleted as $pickup) {
                    $pickupDropoffPointsController = new PickupDropoffPointController();
                    $pickupDropoffPointsController->updateTripId($pickup->id, $trip_id);
                }
            }

            if (!empty($this->dropoffSeleted)) {
                foreach ($this->dropoffSeleted as $dropoff) {
                    $pickupDropoffPointsController = new PickupDropoffPointController();
                    $pickupDropoffPointsController->updateTripId($dropoff->id, $trip_id);
                }
            }

            $busOperator = new BusOperatorController();
            $this->trips = $busOperator->showTrips($this->user->phone)->getData();

            if ($response->code == 1) {

                $this->dispatch('add-trip-success');
            }
        }
    }

    public function updatedPickupValue($value)
    {
        $pickupDropoffPointsController = new PickupDropoffPointController();
        $pickupPoint = $pickupDropoffPointsController->show((int) $value)->getData();

        $this->pickupSeleted[] = $pickupPoint;
    }

    public function updatedDropoffValue($value)
    {

        $pickupDropoffPointsController = new PickupDropoffPointController();
        $dropoffPoint = $pickupDropoffPointsController->show((int) $value)->getData();

        $this->dropoffSeleted[] = $dropoffPoint;
    }

    public function updatedPickupUpdate($value)
    {
        $pickupDropoffPointsController = new PickupDropoffPointController();
        $pickupPoint = $pickupDropoffPointsController->show((int) $value)->getData();

        $this->pickupUpdateSeleted[] = $pickupPoint;
    }

    public function updatedDropoffUpdate($value)
    {

        $pickupDropoffPointsController = new PickupDropoffPointController();
        $dropoffPoint = $pickupDropoffPointsController->show((int) $value)->getData();

        $this->dropoffUpdateSeleted[] = $dropoffPoint;
    }

    public function removePickup($id)
    {
        $this->pickupSeleted = array_filter($this->pickupSeleted, function ($pickup) use ($id) {
            return $pickup->id !== $id;
        });
    }

    public function removeDropoff($id)
    {
        $this->dropoffSeleted = array_filter($this->dropoffSeleted, function ($dropoff) use ($id) {
            return $dropoff->id !== $id;
        });
    }

    public function removePickupUpdate($id)
    {
        $this->pickupUpdateSeleted = array_filter($this->pickupUpdateSeleted, function ($pickup) use ($id) {
            return $pickup->id !== $id;
        });
    }

    public function removeDropoffUpdate($id)
    {
        $this->dropoffUpdateSeleted = array_filter($this->dropoffUpdateSeleted, function ($dropoff) use ($id) {
            return $dropoff->id !== $id;
        });
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

        if ($response->code == 0) {
            return $this->dispatch('update-trip-error');
        }

        $trip_id = $response->tripId;
        // Cập nhật tất cả điểm đón trả của chuyến đi là null
        $pickupDropoffPointsController = new PickupDropoffPointController();
        $pickupDropoffPointsController->setNullTripId($trip_id);
        
        // Điểm đón trả
        if (!empty($this->pickupUpdateSeleted)) {

            foreach ($this->pickupUpdateSeleted as $pickup) {
                $pickupDropoffPointsController->updateTripId($pickup->id, $trip_id);
            }
        }

        if (!empty($this->dropoffUpdateSeleted)) {
            foreach ($this->dropoffUpdateSeleted as $dropoff) {
                $pickupDropoffPointsController->updateTripId($dropoff->id, $trip_id);
            }
        }

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

        // dd($trip);
        if ($trip->code == 1) {
            $this->route_update = $trip->data->route_id;
            $this->bus_update = $trip->data->bus_id;
            $this->departure_update = $trip->data->departure_date . 'T' . $trip->data->departure_time;
            $this->arrival_update = $trip->data->arrival_date . 'T' . $trip->data->arrival_time;
            $this->price_update = $trip->data->price;

            $this->reset('pickupUpdateSeleted');
            $this->reset('dropoffUpdateSeleted');

            foreach ($trip->data->pickup_dropoff_points as $point) {
                if ($point->type == 'pickup') {
                    $this->pickupUpdateSeleted[] = $point;
                } elseif ($point->type == 'dropoff') {
                    $this->dropoffUpdateSeleted[] = $point;
                }
            }
        }
    }

    // Hàm hủy vé
    public function cancel_ticket($id)
    {

        $ticketController = new TicketController();

        $response = $ticketController->cancel($id)->getData();

        // dd($response);
        if ($response->code == 1 || $response->code == 2) {

            $busOperator = new BusOperatorController();

            $this->trips = $busOperator->showTrips($this->user->phone)->getData();

            // $this->tickets = $ticketController->getTicketById(session()->get('user')->phone)->getData();

            return $this->dispatch('cancelled-success');
        }
        if ($response->code == -1) {

            return $this->dispatch('cancelled-before');
        }
        if ($response->code == 0) {

            return $this->dispatch('cancelled-error');
        }
    }

    public function approve($id, $status)
    {
        $ticketController = new TicketController();

        $response = $ticketController->updateStatus($id, $status)->getData();

        if ($response->code == 1) {

            // dd($response);
            $busOperator = new BusOperatorController();
            $this->trips = $busOperator->showTrips($this->user->phone)->getData();

            return $this->dispatch('approve-success');
        } else {
            // dd($response);
            return $this->dispatch('approve-error');
        }
    }

    public function render()
    {
        return view('livewire.admin.trip');
    }
}
