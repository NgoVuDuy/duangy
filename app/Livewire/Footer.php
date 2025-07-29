<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Footer extends Component
{

    public $appColor;

    #[On('changed-app-color')]
    public function changedAppColor() {

        $this->appColor = 1;
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
