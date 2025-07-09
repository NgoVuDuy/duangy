<?php

namespace App\Livewire\Admin;

use App\Http\Controllers\RouteController;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
class Route extends Component
{
    public $routes;
    public $start_point;
    public $end_point;

    public $provinces = [

        ['code' => '92', 'name' => 'Cần Thơ'],
        ['code' => '93', 'name' => 'Hậu Giang'],
        ['code' => '94', 'name' => 'Bạc Liêu'],
        ['code' => '95', 'name' => 'Sóc Trăng'],
        ['code' => '96', 'name' => 'Cà Mau'],
        ['code' => '86', 'name' => 'Đồng Tháp'],
        ['code' => '87', 'name' => 'An Giang'],
        ['code' => '89', 'name' => 'Kiên Giang'],
        ['code' => '83', 'name' => 'Bến Tre'],
        ['code' => '84', 'name' => 'Vĩnh Long'],
        ['code' => '82', 'name' => 'Tiền Giang'],
        ['code' => '80', 'name' => 'Long An'],
        ['code' => '81', 'name' => 'Trà Vinh'],
    ];


    public function mount()
    {

        $routeController = new RouteController();

        $this->routes = $routeController->index()->getData();
    }
    public function save()
    {

        if (
            !empty($this->start_point) && $this->start_point !== "0"
            && !empty($this->end_point) && $this->end_point !== "0"
        ) {

            $routeController = new RouteController();

            $route = $routeController->store($this->start_point, $this->end_point)->getData();

            if ($route->code == 0) {

                $this->dispatch('route-exists');
            } else {

                $routeController = new RouteController();

                $this->routes = $routeController->index()->getData();
                $this->dispatch('route-success');
            }
        } else {
            // $this->dispatch('route-exists');
        }
    }

    public function render()
    {
        return view('livewire.admin.route');
    }
}
