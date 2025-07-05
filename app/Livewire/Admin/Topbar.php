<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Topbar extends Component
{
    public $user;
    public function mount() {

        if(session()->get('admin')) {

            $this->user = session()->get('admin');

        }
    }
    public function render()
    {
        return view('livewire.admin.topbar');
    }
}
