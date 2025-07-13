<?php

namespace App\Livewire\Admin;

use App\Http\Controllers\BusController;
use App\Http\Controllers\BusOperatorController;
use App\Mail\ProblemMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
class Bus extends Component
{

    public $buses = [];
    public $user;

    //
    public $bus_license_plate = "0";
    public $content;

    public function mount()
    {

        if (session()->get('admin')) {

            $this->user = session()->get('admin');
        }

        $busOperator = new BusOperatorController();
        $this->buses = $busOperator->showBuses($this->user->phone)->getData();

        // dd($this->buses);
    }

    public function save($bus_id)
    {

        if ($this->bus_license_plate != "0" && !empty($this->content)) {

            // dd($this->content . $this->bus_id);
            $busController = new BusController();

            // cập nhật lại trạng thái xe
            $response = $busController->update($bus_id, $this->content, $this->bus_license_plate)->getData();

            // Lấy ra các người dùng để gửi mail
            $emailList = $busController->getEmailByBusId($bus_id)->getData();

            // dd($emailList);

            foreach ($emailList as $email => $ticket_code) {

                foreach ($ticket_code as $code) {

                    Mail::to($email)->send(new ProblemMail($this->bus_license_plate, $code, $this->content));
                }
            }
            return $this->js("alert('Cáo sự cố thành công')");

        }
        // dd("hic");

    }

    public function render()
    {
        return view('livewire.admin.bus');
    }
}
