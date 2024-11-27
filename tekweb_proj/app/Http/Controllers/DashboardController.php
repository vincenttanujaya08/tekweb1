<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    // Menampilkan halaman dashboard
    public function index()
    {
        if (session('username')) {
            $username = session('username'); // Mengambil data dari session
            // Menampilkan tampilan dashboard dengan data yang dibawa
            return view('dashboard', compact('username'));
        }
        return redirect()->back()->withErrors(['error' => 'Login First to Access Dashboard']);
       
    }

    
}
