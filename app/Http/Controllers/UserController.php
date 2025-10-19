<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // Tampilkan semua user
    public function index()
    {
        // Ambil semua user dari database
        // $users = User::all();
        $users = User::find($id =2);

        // Kirim data ke view 'users'
        return view('profil', compact('users'));
    }
}
