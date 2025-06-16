<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {}

    public function register(string $phone)
    {

        $user = new User();
        $user->name = '';
        $user->phone = $phone;
        $user->date = '';
        $user->gender = '';
        $user->save();
    }

    public function login(string $phone)
    {

        $user = User::where('phone', $phone)->first();

        if ($user) {

            return response()->json(["code" => 1, "user" => $user]);
        }

        return response()->json(["code" => 0, "user" => $user]);;
    }

    public function updated(string $user_id, string $name, string $phone, string $date, string $gender)
    {
        $user = User::find($user_id);

        if ($user) {

            $user->name = $name;
            $user->phone = $phone;
            $user->date = $date;
            $user->gender = $gender;

            $user->save();

            return response()->json(["code" => 1, "user" => $user]);
        }
        
        return response()->json(["code" => 0, "user" => $user]);
    }
}
