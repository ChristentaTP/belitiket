<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        // Menggunakan nilai default untuk profil
        $user = (object) [
            'name' => 'Nama Default', // Ganti dengan nama default yang diinginkan
            'email' => 'email@default.com' // Ganti dengan email default yang diinginkan
        ];

        // Pass pengguna ke tampilan
        return view('profile.profile', compact('user'));
    }
}
