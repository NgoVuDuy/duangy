<?php

namespace App\Livewire;

use App\Http\Controllers\UserController;
use Livewire\Component;
use Livewire\Attributes\On;

class User extends Component
{

    public $name = '';
    public $phone = '';
    public $date = '';
    public $gender = '';

    public $result = null;

    public $user;

    public $isLogin = false;

    public function mount()
    {
        if (session()->get('user')) {

            $this->isLogin = true;

            $this->user = session()->get('user');

            $this->set_user();
        }
    }

    #[On('login-success')]
    public function login_success()
    {

        $this->isLogin = true;
    }
    #[On('logout-success')]
    public function logout_success()
    {

        $this->isLogin = false;
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



    public function render()
    {
        return view('livewire.user');
    }
}
