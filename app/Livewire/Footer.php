<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Footer extends Component
{

    // public $appColor;

    // #[On('changed-app-color')]
    // public function changedAppColor() {

    //     $this->reset();
    //     // $this->appColor = 1;
    // }
    #[On('changed-app-color')]
    public function changedAppColor($color, $idColor)
    {

        session()->put('header-footer', $color);
        session()->put('id-color', $idColor);

        // return $this->js("location.reload();");
        // return $this->dispatch('changed-app-color');
    }

    #[On('delete-app-color')]
    public function deleteAppColor()
    {

        session()->forget('header-footer');
        session()->forget('id-color');
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
