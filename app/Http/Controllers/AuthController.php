<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'login' => 'required|string|min:3|max:50|unique:users,login',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'login' => $data['login'],
            'password' => $data['password'],
            'role' => 'journalist',
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->banned) {
                Auth::logout();
                return back()->withErrors(['login' => 'Ваш аккаунт заблокирован.']);
            }

            return redirect()->route('home');
        }

        return back()->withErrors(['login' => 'Неверный логин или пароль.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}