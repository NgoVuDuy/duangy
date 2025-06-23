<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class BookingConfirmation extends Component
{
    public $name = '';
    public $phone = '';

    public function mount() {

        $this->get_user();
    }
    // Lấy thông tin người dùng
    public function get_user()
    {
        if (session()->get('user')) {

            $user = session()->get('user');

            $this->name  = $user->name;
            $this->phone = $user->phone;
        }
    }
    // 
    #[On('login-success')]
    public function login_success() {
        
        $this->get_user();
    }


    // Chuyển đến trang thanh toán
    public function next_button()
    {
        if ($this->name == '' || $this->phone == '') {

            return $this->js("alert('Vui lòng nhập thông tin liên hệ')");
        }
        return $this->redirect('/payments', navigate: true);
    }

    public function render()
    {
        return view('livewire.booking-confirmation');
    }
}
