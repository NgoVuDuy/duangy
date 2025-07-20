<?php

namespace App\Livewire;

use App\Http\Controllers\TicketController;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\On;

class Ticket extends Component
{
    public $tickets = [];
    public $isLogin = false;

    public $is_confir;

    public $refund = [];

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

        // Tính khoảng cách thời gian từ hiện tại tới ngày khởi hành chuyến
        $today = Carbon::now()->startOfDay(); // Thời gian hiện tại


        foreach ($this->tickets as $ticket) {

            $departureDate = Carbon::parse($ticket->trip->departure_date)->startOfDay(); // Thời gian khởi hành của xe

            $daysBeforeDeparture = $today->diffInDays($departureDate, false); // false => tính luôn âm

            $daysBeforeDeparture = (int) $daysBeforeDeparture;



            if ($ticket->payment->method == "COD") {

                if ($daysBeforeDeparture >= 2) { // Có thể hủy  

                    $this->refund["is_cancel"][] = true;
                    
                } else {

                    $this->refund["is_cancel"][] = false;
                    
                }
                $this->refund["method"][] = "cod";
                $this->refund["daybefore"][] = $daysBeforeDeparture;


            } else {

                $refundPercent = 0; // Phần trăm hoàn tiền

                if ($daysBeforeDeparture >= 3) {

                    $refundPercent = 100;
                } elseif ($daysBeforeDeparture === 2) {

                    $refundPercent = 70;
                } elseif ($daysBeforeDeparture === 1) {

                    $refundPercent = 50;
                } elseif ($daysBeforeDeparture <= 0) {

                    $refundPercent = 0;
                }

                $refundAmount = str_replace('.', '',  $ticket->price) * ($refundPercent / 100);

                $this->refund["pecent"][] = $refundPercent;
                $this->refund["daybefore"][] = $daysBeforeDeparture;
                $this->refund["amount"][] = number_format($refundAmount, 0, ',', '.');
                $this->refund["is_cancel"][] = true;
                $this->refund["method"][] = "vnpay";

            }
        }

        // dd($this->refund);

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
