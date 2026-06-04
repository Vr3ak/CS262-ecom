<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function registerForm() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $data = $request->validate([
            'name'     => 'required|min:3|max:30',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:8|max:30',
        ]);

        User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
            'role'     => 'customer',
        ]);

        return redirect(route('auth.login'));
    }

    public function loginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            if (auth()->user()->role === 'admin') {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/');
            }
        }

        return back()->withErrors(['email' => 'Wrong email or password']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
