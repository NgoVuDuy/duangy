<?php

namespace App\Livewire;

use App\Http\Controllers\TicketController;
use Livewire\Component;

class Payment extends Component
{
    public $pym_option = 'opt-2';
    public $trip_details = null;
    public $user  = null;
    public $user_phone = null;

    public function mount()
    {

        if (session()->get('ticket')) {

            $this->trip_details = session()->get('ticket');
        }
        // dd(session()->get('ticket'));
    }

    public function payment()
    {


        if (session()->get('user')) {

            $this->user = session()->get('user');
            $this->user_phone = $this->user->phone ?? null;
        }

                // session()->put('')
        $array_phone = session()->get('phone', []);
        $array_phone[] = $this->trip_details["phone"];
        session()->put('phone', $array_phone);

        if ($this->pym_option == 'opt-2') {

            session()->put('ticket.method', "Thanh toán khi lên xe");

            // Thêm vé xe vào database
            $ticketController = new TicketController();

            foreach ($this->trip_details["seat_id"] as $key => $seat_id) {

                $ticketController->store($this->trip_details["name"], $this->trip_details["phone"], $this->user_phone, $this->trip_details["trip"]["id"], $this->trip_details["pickup"]["id"], $this->trip_details["dropoff"]["id"], $seat_id, "pending", "Thanh toán khi lên xe", $this->trip_details["seat_list"][$key]);
            }
        }

        if ($this->pym_option == 'opt-1') {

            session()->put('ticket.method', "VNPay");
        }
    }

    public function render()
    {
        return view('livewire.payment');
    }
}
