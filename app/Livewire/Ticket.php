<?php

namespace App\Livewire;

use App\Http\Controllers\TicketController;
use Livewire\Component;
use Livewire\Attributes\On;

class Ticket extends Component
{
    public $tickets = [];
    public $isLogin = false;


    public function mount()
    {
        if (session()->get('user')) {

            $this->isLogin = true;
        }

        $ticketController = new TicketController();

        // Nếu đã đăng nhập
        if (session()->get('user')) {

            $this->tickets = $ticketController->getTicketById(session()->get('user')->phone)->getData();

            // dd($this->tickets);
            // $this->tickets = array_merge($this->tickets, $result);
        }

        // else {

        //     if (session()->get('phone')) {

        //         foreach (session()->get('phone') as $phone) {

        //             $result = $ticketController->getTicketByPhone($phone)->getData();

        //             $this->tickets = array_merge($this->tickets, $result);
        //         }
        //     }
        // }

        // dd($this->tickets);
    }

    #[On('login-success')]
    public function login_success()
    {

        if (session()->get('user')) {

            $this->isLogin = true;
        }
        // Nếu đã đăng nhập
        if (session()->get('user')) {

            // $this->reset('tickets');

            $ticketController = new TicketController();
            $this->tickets = $ticketController->getTicketById(session()->get('user')->phone)->getData();

            // $this->tickets = array_merge($this->tickets, $result);
        }
    }
    #[On('logout-success')]
    public function logout_success()
    {
        $this->reset('tickets');
        $this->reset('isLogin');

        // if (session()->get('phone')) {


            // foreach (session()->get('phone') as $phone) {

            //     $ticketController = new TicketController();
            //     $result = $ticketController->getTicketByPhone($phone)->getData();

            //     $this->tickets = array_merge($this->tickets, $result);
            // }
        // }
    }

    public function render()
    {
        return view('livewire.ticket');
    }
}
