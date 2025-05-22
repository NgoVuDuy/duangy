<?php

namespace App\Livewire;

use Livewire\Component;


class TripSearchForm extends Component
{
    public function trip_search() {
        return $this->redirect('trips', navigate:true);
    }
    public function render()
    {
        return view('livewire.trip-search-form');
    }
}
