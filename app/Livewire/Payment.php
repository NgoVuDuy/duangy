<?php

namespace App\Livewire;

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TicketController;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\Attributes\On;

class Payment extends Component
{
    public $pym_option = 'opt-2';
    public $trip_details = null;
    public $user  = null;
    public $user_phone = null;

    public $payment_result = null;

    public function mount(Request $request)
    {

        if (session()->get('ticket')) {

            $this->trip_details = session()->get('ticket');
        }
        // dd(session()->get('ticket'));
        if ($request->query('query')) {

            if ($request->query('query') == "success") {

                // $this->dispatch('payment-success');
                $this->payment_result = true;
            } else {
                // $this->dispatch('payment-error');
                $this->payment_result = false;
            }
        }
    }

    #[On('payment')]
    public function payment()
    {

        if (session()->get('user')) {

            $this->user = session()->get('user');
            $this->user_phone = $this->user->phone ?? null;
        }

        $array_phone = session()->get('phone', []);
        $array_phone[] = $this->trip_details["phone"];
        session()->put('phone', $array_phone);

        $paymentController = new PaymentController();

        // Tính tổng tiền của đơn
        $amount = number_format(array_sum($this->trip_details["seat_list"]) * 1000, 0, ',', '');

        // dd($amount);

        // Thanh toán khi lên xe
        if ($this->pym_option == 'opt-2') {

            session()->put('ticket.method', "Thanh toán khi lên xe");

            // Thêm thanh toán
            $response = $paymentController->save((int) $amount * 100)->getData();

            // dd($response);

            // Thêm vé xe vào database
            $ticketController = new TicketController();

            foreach ($this->trip_details["seat_id"] as $key => $seat_id) {

                $ticketController->store($this->trip_details["name"], $this->trip_details["phone"], $this->user_phone, $this->trip_details["trip"]["id"], $this->trip_details["pickup"]["id"], $this->trip_details["dropoff"]["id"], $seat_id, "pending", "", $this->trip_details["seat_list"][$key], $response->id);
            }

            // Thông báo thành công
            $this->dispatch('payment-success');
            //
        }

        // Thanh toán bằng vnpay
        if ($this->pym_option == 'opt-1') {

            session()->put('ticket.method', "VNPay");

            $response = $paymentController->store((int) $amount, request()->ip())->getData();

            // dd($response);

            if ($response->message == "success") {

                return $this->redirect($response->data);
            }
        }
    }

    public function render()
    {
        return view('livewire.payment');
    }
}
