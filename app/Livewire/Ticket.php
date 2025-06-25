<?php

namespace App\Livewire;

use App\Http\Controllers\TicketController;
use Livewire\Component;

class Ticket extends Component
{
    public $tickets = [];

    public function mount()
    {

        $ticketController = new TicketController();


        if (session()->get('user')) {

            $result = $ticketController->getTicketById(session()->get('user')->phone)->getData();

            $this->tickets = array_merge($this->tickets, $result);
        } else {

            if (session()->get('phone')) {

                foreach (session()->get('phone') as $phone) {

                    $result = $ticketController->getTicketByPhone($phone)->getData();

                    $this->tickets = array_merge($this->tickets, $result);
                }
            }
        }

        // dd($this->tickets);
    }

    public function render()
    {
        return view('livewire.ticket');
    }
}
