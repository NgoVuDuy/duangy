<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
class Account extends Component
{
    public $user;
    public $name;
    public $phone;

    public function mount() {

        if(session()->get('admin')) {

            $this->user = session()->get('admin');

            $this->name = $this->user->name;
            $this->phone = $this->user->phone;
        }

    }

    public function render()
    {
        return view('livewire.admin.account');
    }
}
