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

            // dd(session()->get('user'));
        }
    }

    public function setShowLoginForm()
    {

        $this->isShowLoginForm = !$this->isShowLoginForm;
    }

    public function deleteColor() {
        session()->forget('header-footer');
        session()->forget('id-color');
        // session()->forget('button');

        // return $this->js("location.reload();");
        return $this->dispatch('changed-app-color');
    }

    public function setColor($color, $idColor)
    {

        session()->put('header-footer', $color);
        session()->put('id-color', $idColor);
        // session()->put('button', "rgb(106, 90, 205)");

        // return $this->js("location.reload();");
        return $this->dispatch('changed-app-color');
    }

    #[On('login-success')]
    public function login_success()
    {

        $this->isShowUserIcon = true; // Hiện icon
        $this->isShowLoginForm = false; // Ẩn form đăng nhập
    }

    #[On('login-error')]
    public function login_error()
    {

        $this->dispatch('lg-error');
    }

    #[On('rr-error')]
    public function register_error()
    {
        // dd("loi");
        $this->dispatch('reg-error');
    }

    #[On('rr-success')]
    public function register_success()
    {
        // dd("thanh cong");
        $this->dispatch('reg-success');
    }

    #[On('logout-success')]
    public function logout_success()
    {

        $this->isShowUserIcon = false; // Ẩn icon
        $this->isShowLoginForm = false; // Ẩn form đăng nhập

        // return $this->redirect('/', navigate: true);
    }

    // #[On('logout-admin-success')]
    // public function logout_admin_success()
    // {
    //     dd("hì");

    //     $this->isShowUserIcon = false; // Ẩn icon
    //     $this->isShowLoginForm = false; // Ẩn form đăng nhập

    //     return $this->redirect('/');
    // }

    public function render()
    {
        return view('livewire.header');
    }
}
