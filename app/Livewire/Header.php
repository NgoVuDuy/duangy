<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Livewire;

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

    public function deleteColor()
    {


        // return $this->dispatch('changed-app-color');
        $this->dispatch('delete-app-color');
    }

    public function setColor($color, $idColor)
    {

        $this->dispatch('changed-app-color', color: $color, idColor: $idColor);
    }

    #[On('changed-app-color')]
    public function changedAppColor($color, $idColor)
    {

        session()->put('header-footer', $color);
        session()->put('id-color', $idColor);
    }

    #[On('delete-app-color')]
    public function deleteAppColor()
    {

        session()->forget('header-footer');
        session()->forget('id-color');
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
