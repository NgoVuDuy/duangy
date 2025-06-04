<?php

namespace App\Livewire;

use Livewire\Component;

class LoginRegisterForm extends Component
{

    public $isShowLogin = true;
    public $isShowRegister = false;

    public function close_header_form() {

    }

    public function setShowOther() {
        $this->isShowLogin = !$this->isShowLogin;
        $this->isShowRegister = !$this->isShowRegister;
    }

    public function render()
    {
        return view('livewire.login-register-form');
    }
}
