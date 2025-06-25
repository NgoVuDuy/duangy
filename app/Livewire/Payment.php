<?php

namespace App\Livewire;

use App\Http\Controllers\TicketController;
use Livewire\Component;

class Payment extends Component
{
    public $pym_option = 'opt-2';
    public $trip_details = null;
    public $user  = null;

    public function mount()
    {

        if (session()->get('ticket')) {

            $this->trip_details = session()->get('ticket');
        }

        // dd(session()->get('ticket'));

    }

    public function payment()
    {
        if ($this->pym_option == 'opt-2') {

            session()->put('ticket.method', "Thanh toán khi lên xe");

            // Thêm vé xe vào database
            $ticketController = new TicketController();
            // $ticketController->store($this->trip_details["name"], $this->trip_details["phone"], $this->trip_details[""]);

            // return $this->js(

            //     'if(confirm("Bạn có chắc muốn đặt vé không ?")) {

            //         alert("Đặt vé thành công")
            //     }'
            // );

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
