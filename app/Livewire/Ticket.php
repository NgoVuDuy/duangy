<?php

namespace App\Livewire;

use App\Http\Controllers\TicketController;
use Livewire\Component;
use Livewire\Attributes\On;

class Ticket extends Component
{
    public $tickets = [];

    public function mount()
    {

        $ticketController = new TicketController();

        // Nếu đã đăng nhập
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

    #[On('login-success')]
    public function login_success()
    {
        // Nếu đã đăng nhập
        if (session()->get('user')) {

            $this->reset('tickets');

            $ticketController = new TicketController();
            $result = $ticketController->getTicketById(session()->get('user')->phone)->getData();

            $this->tickets = array_merge($this->tickets, $result);
        }
    }
    #[On('logout-success')]
    public function logout_success()
    {
        if (session()->get('phone')) {

            $this->reset('tickets');

            foreach (session()->get('phone') as $phone) {

                $ticketController = new TicketController();
                $result = $ticketController->getTicketByPhone($phone)->getData();

                $this->tickets = array_merge($this->tickets, $result);
            }
        }
    }

    public function render()
    {
        return view('livewire.ticket');
    }
}
