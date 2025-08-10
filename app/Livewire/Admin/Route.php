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
    public $bus_operator_phone;

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

        $this->bus_operator_phone = session()->get('admin')->phone;
        // dd($this->routes);
    }
    public function add_route() {

        $this->reset('start_point');
        $this->reset('end_point');
    }

    public function save()
    {

        if (
            !empty($this->start_point) && $this->start_point !== "0"
            && !empty($this->end_point) && $this->end_point !== "0"
        ) {

            $routeController = new RouteController();

            $route = $routeController->store($this->start_point, $this->end_point, $this->bus_operator_phone)->getData();

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

    public function edit($route_id) {

        $routeController = new RouteController();

        $route = $routeController->show($route_id)->getData();

        if($route->code = 1) {

            $this->start_point = $route->data->start_point;
            $this->end_point = $route->data->end_point;
        }

    }

    public function update_route($route_id) {


        $routeController = new RouteController();

        $route = $routeController->update($route_id, $this->start_point, $this->end_point)->getData();

        $this->routes = $routeController->index()->getData();

        $this->dispatch('update-route-success');

    }

    public function delete($route_id) {

        $routeController = new RouteController();
        
        $routeController->destroy($route_id);

        $this->routes = $routeController->index()->getData();

        $this->dispatch('delete-route-success');
    }

    public function render()
    {
        return view('livewire.admin.route');
    }
}
