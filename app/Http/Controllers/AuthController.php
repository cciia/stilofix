<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Cek role
            if (auth()->user()->role === 'admin') {
                return redirect()->route('admin.products.index');
            } else {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Hanya admin yang boleh login.');
            }
        }

        return redirect()->route('login')->with('error', 'Email atau password salah.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
