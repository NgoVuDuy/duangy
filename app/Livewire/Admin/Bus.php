<?php

namespace App\Livewire\Admin;

use App\Http\Controllers\BusController;
use App\Http\Controllers\BusOperatorController;
use App\Mail\FixedMail;
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
    // public $bus_license_plate = "0";
    // public $content;
    public $content = [];
    public $bus_license_plate = [];


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
        // dd($bus_id);

        $content = $this->content[$bus_id] ?? null;
        $busLicense = $this->bus_license_plate[$bus_id] ?? null;

        if (!empty($busLicense) && !empty($content)) {

            // dd($content);

            // dd($this->content . $this->bus_id);
            $busController = new BusController();
            // Lấy ra các người dùng để gửi mail
            $emailList = $busController->getEmailByBusId($bus_id)->getData();

            // dd($emailList);

            // cập nhật lại trạng thái xe
            $response = $busController->update($bus_id, $content, $busLicense, "inactive")->getData();

            if (!empty($emailList)) {

                foreach ($emailList as $email => $tickets) {

                    Mail::to($email)->send(new ProblemMail($tickets, $content, $busLicense));

                    // foreach ($ticket as $item) {

                    //     Mail::to($email)->send(new ProblemMail($busLicense, $code, $content));
                    // }
                }
            }

            // Lấy lại danh sách các xe
            $busOperator = new BusOperatorController();
            $this->buses = $busOperator->showBuses($this->user->phone)->getData();
            // return $this->js("alert('Cáo sự cố thành công')");

            return $this->dispatch('reported-problem');
        }

        dd("không hợp lệ");

        return $this->dispatch('error-reported-problem');
    }

    public function fixed_problem($bus_id)
    {

        // dd($this->content . $this->bus_id);
        $busController = new BusController();

        // cập nhật lại trạng thái xe
        $response = $busController->update($bus_id, "", "", "active")->getData();

        // Lấy ra các người dùng để gửi mail
        $emailList = $busController->getEmailByBusId($bus_id)->getData();

        // dd($emailList);
        if (!empty($emailList)) {

            foreach ($emailList as $email => $tickets) {

                Mail::to($email)->send(new FixedMail($tickets));

                // foreach ($ticket as $item) {

                //     Mail::to($email)->send(new ProblemMail($busLicense, $code, $content));
                // }
            }
        }

        // foreach ($emailList as $email => $ticket_code) {

        //     foreach ($ticket_code as $code) {

        //         Mail::to($email)->send(new FixedMail($code));
        //     }
        // }
        // Lấy lại danh sách các xe
        $busOperator = new BusOperatorController();
        $this->buses = $busOperator->showBuses($this->user->phone)->getData();
        // return $this->js("alert('Cáo sự cố thành công')");

        return $this->dispatch('fixed-problem');
    }

    public function render()
    {
        return view('livewire.admin.bus');
    }
}
