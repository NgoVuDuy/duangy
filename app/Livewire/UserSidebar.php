<?php

namespace App\Livewire;

use Livewire\Component;

class UserSidebar extends Component
{
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
