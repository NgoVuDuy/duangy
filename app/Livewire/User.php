<?php

namespace App\Livewire;

use App\Http\Controllers\UserController;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;

#[Title('Thông tin người dùng')]
class User extends Component
{

    public $name = '';
    public $phone = '';
    public $date = '';
    public $gender = '';
    public $email = '';
    public $wallet = '********';

    public $result = null;

    public $user;

    public $isLogin = false;
    public $isShowWallet = false;

    public function mount()
    {
        if (session()->get('user')) {

            $this->isLogin = true;

            $this->user = session()->get('user');

            $this->set_user();
        }

        // dd($this->user);
    }

    #[On('login-success')]
    public function login_success()
    {
        if (session()->get('user')) {

            $this->isLogin = true;

            $this->user = session()->get('user');

            $this->set_user();
        }
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
        $this->email = $this->user->email;
        // $this->wallet = $this->user->wallet . 'đ';
    }

    public function save()
    {

        $userController = new UserController();

        $this->result = $userController->updated($this->user->phone, $this->name, $this->phone, $this->date, $this->gender, $this->email)->getData();

        $this->user = $this->result->user;

        session()->put('user', $this->user);
    }

    public function showWallet()
    {

        $this->isShowWallet = !$this->isShowWallet;
        
        if ($this->isShowWallet) {
            $this->wallet = $this->user->wallet . 'đ';
        } else {
            $this->wallet = '********';
        }
    }


    public function render()
    {
        return view('livewire.user');
    }
}
