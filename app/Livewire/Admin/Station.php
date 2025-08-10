<?php

namespace App\Livewire\Admin;

use App\Http\Controllers\PickupDropoffPointController;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
class Station extends Component
{
    public $pickupDropoffPoints = [];

    public $name;
    public $address;
    public $time;
    public $type = "0";

    public function mount()
    {
        $pickupDropoffPointsController = new PickupDropoffPointController();

        $this->pickupDropoffPoints = $pickupDropoffPointsController->index('all')->getData();
    }

    public function save()
    {
        if($this->type == "pickup" || $this->type == "dropoff") {
            
            $pickupDropoffPointsController = new PickupDropoffPointController();
    
            $response = $pickupDropoffPointsController->store($this->name, $this->address, $this->time, $this->type)->getData();
    
            if ($response->code = 1) {
    
                $pickupDropoffPointsController = new PickupDropoffPointController();
    
                $this->pickupDropoffPoints = $pickupDropoffPointsController->index('all')->getData();
    
                $this->dispatch("stationSaved");
            } else {
                $this->dispatch("stationError");
            }
        }

    }
    public function resetFields()
    {
        $this->name = '';
        $this->address = '';
        $this->time = '';
        $this->type = '0';
    }

    public function setter($id)
    {
        $pickupDropoffPointsController = new PickupDropoffPointController();
        $point = $pickupDropoffPointsController->show($id)->getData();

        if ($point) {
            $this->name = $point->name;
            $this->address = $point->address;
            $this->time = $point->time;
            $this->type = $point->type;
        }
    }

    public function edit($id) {
        $pickupDropoffPointsController = new PickupDropoffPointController();

        $response = $pickupDropoffPointsController->update($id, $this->name, $this->address, $this->time, $this->type)->getData();

        if ($response->code == 1) {
            $this->pickupDropoffPoints = $pickupDropoffPointsController->index('all')->getData();

            $this->dispatch("stationUpdated");
        } else {
            $this->dispatch("stationError");
        }
    }

    public function delete($id) {
        $pickupDropoffPointsController = new PickupDropoffPointController();

        $response = $pickupDropoffPointsController->destroy($id)->getData();

        if ($response->code == 1) {
            $this->pickupDropoffPoints = $pickupDropoffPointsController->index('all')->getData();

            $this->dispatch("stationDeleted");
        } else {
            $this->dispatch("stationError");
        }
    }

    public function render()
    {
        return view('livewire.admin.station');
    }
}
