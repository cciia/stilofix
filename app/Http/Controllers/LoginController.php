<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Cek apakah admin
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.products.index');
            } else {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Akses hanya untuk admin!');
            }
        }

        return redirect()->route('login')->with('error', 'Email atau password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
