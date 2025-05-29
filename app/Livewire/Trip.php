<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Kết quả tìm kiếm chuyến xe')]
class Trip extends Component
{
    public $isShowPoints;

    public function show_points(string $i) {

        $this->isShowPoints[$i] = true;
    }
    public function hide_points(string $i) {
        
        $this->isShowPoints[$i] = false;

        // dd($this->isShowPoints);
    }

    public function render()
    {
        return view('livewire.trip');
    }
}
