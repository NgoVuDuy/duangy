<?php

namespace App\Livewire;

use Livewire\Component;

class BookingConfirmation extends Component
{
    public function next_button() {
        return $this->redirect('/payments', navigate:true);
    }

    public function render()
    {
        return view('livewire.booking-confirmation');
    }
}
