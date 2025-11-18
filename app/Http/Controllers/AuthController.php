<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Tampilkan form register
     */
    public function showRegister()
    {
        return view('auth.register'); // pastikan file ini ada di resources/views/auth/register.blade.php
    }

    /**
     * Proses register
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'status' => 'user', // default role
        ]);

        Auth::login($user);

        return redirect()->route('beranda')->with('success', 'Registrasi berhasil!');
    }

    /**
     * Tampilkan form login
     */
    public function showLogin()
    {
        return view('auth.login'); // pastikan file ini ada di resources/views/auth/login.blade.php
    }

    /**
     * Proses login
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();
            
            // Redirect berdasarkan role
            if (Auth::user()->status === 'admin') {
                return redirect()->route('katalogAdmin');
            }
            
            return redirect()->route('beranda');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ])->withInput();
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('beranda');
    }
}