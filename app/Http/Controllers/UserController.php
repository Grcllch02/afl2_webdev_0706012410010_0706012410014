<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Get user with ID 2 (sesuai dengan seeder Anda)
        $user = User::find(2);
        
        // Jika user tidak ditemukan, buat user dummy
        if (!$user) {
            $user = User::first(); // Ambil user pertama yang ada
        }
        
        return view('profile', compact('user'));
    }
}