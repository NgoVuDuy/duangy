<?php

namespace App\Livewire\Admin;

use App\Http\Controllers\BusOperatorController;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
class Bus extends Component
{

    public $buses = [];

    public function mount() {

        $busOperator = new BusOperatorController();
        $this->buses = $busOperator->showBuses('19001980')->getData();

        // dd($this->buses);
    }

    public function render()
    {
        return view('livewire.admin.bus');
    }
}
