<?php

namespace App\Livewire;

use App\Http\Controllers\UserController;
use Livewire\Component;

use Livewire\Attributes\Session;

class LoginRegisterForm extends Component
{

    public $isShowLogin = true;
    public $isShowRegister = false;

    public $phoneNumber;

    public $result = null; // Dữ liệu người dùng 

    // #[Session(key: 'user')]
    // public $user;

    public function mount()
    {

        // dd($this->user);
        // dd(session()->get('user'));

    }

    // Hàm chuyển đổi form đăng nhập - đăng ký
    public function setShowOther()
    {
        $this->isShowLogin = !$this->isShowLogin;
        $this->isShowRegister = !$this->isShowRegister;
    }

    // Hàm đăng nhập
    public function login()
    {

        if (!empty($this->phoneNumber)) {

            $userController = new UserController();

            $this->result = $userController->login($this->phoneNumber)->getData();

            if ($this->result->code == 0) {

                // return $this->js("alert('Đăng nhập thất bại')");
                $this->dispatch('login-error');
            } else {

                if ($this->result->role == "user") {

                    // $this->user = $this->result->user;
                    session()->put('user', $this->result->user);

                    // Phát sự kiện cho header cập nhật lại giao diện
                    $this->dispatch('login-success');
                } else {

                    session()->put('admin', $this->result->user);

                    return $this->redirect('/routes');
                }
            }
        }
    }

    // Hàm đăng ký
    public function register()
    {
        if (!empty($this->phoneNumber)) {

            $userController = new UserController();

            $result = $userController->register($this->phoneNumber)->getData();

            // dd($result);

            if($result->code == 1) {

                // dd("loi");
                $this->dispatch('rr-success');
            } else {
                // dd("thanh cong");
                $this->dispatch('rr-error');
            }

            // return $this->js("alert('Đăng ký thành công')");
        }
    }

    public function render()
    {

        return view('livewire.login-register-form');
    }
}
