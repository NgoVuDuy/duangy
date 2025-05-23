<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Kết quả tìm kiếm chuyến xe')]
class Trip extends Component
{
    public function render()
    {
        return view('livewire.trip');
    }
}
