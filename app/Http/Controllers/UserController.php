<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(2);

        // Jika user tidak ditemukan, buat user dummy
        if (!$user) {
            $user = User::first(); // Ambil user pertama yang ada
        }

        return view('profile', compact('user'));
    }
}
