<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class UserSidebar extends Component
{
    public $isLogin = false;

    public function mount()
    {

        if (session()->get('user')) {

            $this->isLogin = true;
        }
    }

    #[On('login-success')]
    public function login_success()
    {

        $this->isLogin = true;
    }
    #[On('logout-success')]
    public function logout_success()
    {

        $this->isLogin = false;
    }


    public function logout()
    { 

        session()->forget('user');

        $this->dispatch('logout-success');
    }

    public function render()
    {
        return view('livewire.user-sidebar');
    }
}
