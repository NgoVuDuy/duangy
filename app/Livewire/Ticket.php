<?php

namespace App\Livewire;

use App\Http\Controllers\TicketController;
use Livewire\Component;
use Livewire\Attributes\On;

class Ticket extends Component
{
    public $tickets = [];
    public $isLogin = false;

    public $is_confir;

    public function mount()
    {
        if (session()->get('user')) {

            $this->isLogin = true;
        }

        $ticketController = new TicketController();

        // Nếu đã đăng nhập
        if (session()->get('user')) {

            // cập nhật lại vé đã đi
            $ticketController->updateExpiredTickets(session()->get('user')->phone);

            $this->tickets = $ticketController->getTicketById(session()->get('user')->phone)->getData();
        }
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

    // Hàm hủy vé
    public function cancel_ticket($id)
    {

        $ticketController = new TicketController();

        $response = $ticketController->cancel($id)->getData();

        // dd($response);
        if ($response->code == 1 || $response->code == 2) {

            $this->tickets = $ticketController->getTicketById(session()->get('user')->phone)->getData();

            return $this->dispatch('cancelled-success');
        }
        if ($response->code == -1) {

            return $this->dispatch('cancelled-before');
        }
        if ($response->code == 0) {

            return $this->dispatch('cancelled-error');
        }
    }

    public function render()
    {
        return view('livewire.ticket');
    }
}
