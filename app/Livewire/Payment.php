<?php

namespace App\Livewire;

use Livewire\Component;

class Payment extends Component
{
    public $pym_option = 'opt-2';

    public function payment()
    {
        if ($this->pym_option == 'opt-2') {
            session()->put('ticket.method', "Thanh toán khi lên xe");

            // return $this->js(

            //     'if(confirm("Bạn có chắc muốn đặt vé không ?")) {
                        
            //         alert("Đặt vé thành công")
            //     }'
            // );

        }

        if($this->pym_option == 'opt-1') {

            session()->put('ticket.method', "VNPay");

        }

    }

    public function render()
    {
        return view('livewire.payment');
    }
}
