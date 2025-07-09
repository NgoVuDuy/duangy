<?php

namespace App\Livewire\Admin;

use App\Http\Controllers\BusOperatorController;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
class Bus extends Component
{

    public $buses = [];
    public $user;

    public function mount() {

        if(session()->get('admin')) {

            $this->user = session()->get('admin');
        }

        $busOperator = new BusOperatorController();
        $this->buses = $busOperator->showBuses($this->user->phone)->getData();

        // dd($this->buses);
    }

    public function render()
    {
        return view('livewire.admin.bus');
    }
}
