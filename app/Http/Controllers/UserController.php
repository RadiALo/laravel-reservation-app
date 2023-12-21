<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login_get()
    {
        return view('user.login');
    }

    public function login_post(Request $request)
    {
        $login_field = filter_var($request->login, FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'phone_number';
        $user = User::where($login_field, $request->login)->first();
        if ($user) {
            Auth::login($user);
            return redirect()->route('index')->with('success', 'Login successfull');
        } else {
            return redirect()->route('user.login')->with('error', 'Inccorect data');
        }
    }

    public function register_get()
    {
        return view('user.register');
    }

    public function register_post(Request $request)
    {

        if ($request->has('email') || $request->has('phone_number')) {
            $request->validate([
                'email' => 'required|email|unique:users,email',
                'phone_number' => 'required|unique:users,phone_number'
            ]);

            $user = User::create([
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'occupation' => $request->occupation
            ]);
        } else {
            return redirect()->route('user.register')->with('error', 'Input all data!');
        }

        return redirect()->route('user.login')->with('success', 'Register success! Now login.');
    }

    public function logout_get() {
        Auth::logout();

        return redirect()->route('user.login')->with('success', 'Logout succesfull!');
    }
}
