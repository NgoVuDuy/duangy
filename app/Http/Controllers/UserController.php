<?php

namespace App\Http\Controllers;

use App\Models\BusOperator;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {}

    public function register(string $phone)
    {
        $exists = User::where('phone', $phone)->exists();

        if (!$exists) {

            $user = new User();
            $user->name = '';
            $user->phone = $phone;
            $user->date = '';
            $user->gender = '';
            $user->email = '';
            $user->save();

            return response()->json(["code" => 1, "message" => "Đăng ký tài khoản thành công"]);
        } else {

            return response()->json(["code" => 0, "message" => "Đăng ký tài khoản thất bại"]);
        }
    }

    public function login(string $phone)
    {

        $user = User::where('phone', $phone)->first();
        $bus_operator = BusOperator::where('phone', $phone)->first();

        if ($user) {

            return response()->json(["code" => 1, "user" => $user, "role" => "user"]);
        }

        if ($bus_operator) {

            return response()->json(["code" => 1, "user" => $bus_operator, "role" => "admin"]);
        }

        return response()->json(["code" => 0, "user" => $user, "role" => ""]);;
    }
    public function updateWallet(string $user_phone, string $wallet) {

        $user = User::where('phone', $user_phone)->first();

        if ($user) {

            $user->wallet = $wallet;
            $user->save();

            session()->put('user', $user);

            return response()->json(["code" => 1, "user" => $user]);
        }

        return response()->json(["code" => 0, "message" => "Cập nhật ví tiền thất bại"]);

    }
    public function updatedPatch(string $user_id, string $email, string $name) 
    {
        $user = User::where('phone', $user_id)->first();

        if ($user) {

            $user->name = $name;
            $user->email = $email;

            $user->save();

            session()->put('user', $user);

            return response()->json(["code" => 1, "user" => $user]);
        }

        return response()->json(["code" => 0, "user" => $user]);
    }

    public function updated(string $user_id, string $name, string $phone, string $date, string $gender, string $email)
    {
        // $user = User::find($user_id);
        $user = User::where('phone', $user_id)->first();

        if ($user) {

            $user->name = $name;
            $user->phone = $phone;
            $user->date = $date;
            $user->gender = $gender;
            $user->email = $email;

            $user->save();

            return response()->json(["code" => 1, "user" => $user]);
        }

        return response()->json(["code" => 0, "user" => $user]);
    }
}
