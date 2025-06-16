<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Session;

class Header extends Component
{
    // #[Session(key: 'user')]
    // public $user;

    public $isShowLoginForm = false; // Hiện form đăng nhập đăng ký khi ấn nút

    public $isShowUserIcon = false; // Hiện icon lên header khi đăng nhập thành công

    public function mount()
    {

        if (!empty(session()->get('user'))) {

            $this->isShowUserIcon = true;
        }
    }

    public function setShowLoginForm()
    {

        $this->isShowLoginForm = !$this->isShowLoginForm;
    }

    #[On('login-success')]
    public function login_success()
    {

        $this->isShowUserIcon = true; // Hiện icon
        $this->isShowLoginForm = false; // Ẩn form đăng nhập
    }

    #[On('logout-success')]
    public function logout_success()
    {

        $this->isShowUserIcon = false; // Hiện icon
        $this->isShowLoginForm = false; // Ẩn form đăng nhập

        return $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.header');
    }
}
