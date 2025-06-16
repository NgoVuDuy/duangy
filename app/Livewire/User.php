<?php

namespace App\Livewire;

use App\Http\Controllers\UserController;
use Livewire\Component;

use Livewire\Attributes\Session;

class User extends Component
{

    public $name = '';
    public $phone = '';
    public $date = '';
    public $gender = '';

    public $result = null;

    public $user;

    public function mount()
    {
        $this->user = session()->get('user');

        // dd(session()->get('user'));

        // dd($this->user); 


        $this->set_user();
    }

    public function set_user()
    {
        $this->name = $this->user->name;
        $this->phone = $this->user->phone;
        $this->date = $this->user->date;
        $this->gender = $this->user->gender;
    }

    public function save()
    {

        $userController = new UserController();

        $this->result = $userController->updated($this->user->id, $this->name, $this->phone, $this->date, $this->gender)->getData();

        $this->user = $this->result->user;

        session()->put('user', $this->user);

    }

    public function logout() {

        session()->forget('user');

        $this->dispatch('logout-success');

    }

    public function render()
    {
        return view('livewire.user');
    }
}
