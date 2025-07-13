<?php

namespace App\Livewire;

use App\Http\Controllers\UserController;
use Livewire\Component;
use Livewire\Attributes\On;

class BookingConfirmation extends Component
{
    public $name = '';
    public $phone = '';
    public $email = '';
    public $trip_details = null;

    public function mount() {

        $this->get_user();

        if(session()->get('ticket')) {

            $this->trip_details = session()->get('ticket');
        }
        // dd(session()->get('ticket'));
    }
    // Lấy thông tin người dùng
    public function get_user()
    {
        if (session()->get('user')) {

            $user = session()->get('user');

            $this->name  = $user->name;
            $this->phone = $user->phone;
            $this->email = $user->email;
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
        if ($this->name == '' || $this->phone == '' || $this->email == '') {

            return $this->js("alert('Vui lòng nhập thông tin liên hệ')");
        }
        // Cập nhật thêm tên và sdt
        $userController = new UserController();
        $response = $userController->updatedPatch(session()->get('user')->phone, $this->email, $this->name);

        // Lưu tên người dùng và số điện thoại vào session
        session()->put('ticket.name', $this->name);
        session()->put('ticket.phone', $this->phone);
        session()->put('ticket.email', $this->email);

        return $this->redirect('/payments', navigate: true);
    }

    public function render()
    {
        return view('livewire.booking-confirmation');
    }
}
