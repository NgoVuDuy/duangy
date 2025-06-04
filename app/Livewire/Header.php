<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{

    public $isShowLoginForm = false;

    public function setShowLoginForm() {

        $this->isShowLoginForm = !$this->isShowLoginForm;
    }

    public function render()
    {
        return view('livewire.header');
    }
}
