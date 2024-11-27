<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Show Login Form
    public function showLoginForm()
    {
        if (session('username')) {
            return redirect()->route('dashboard');
        }
        return view('/login/loginPage');
    }

    // Process Login Form
    public function login(Request $request)
    
{
    // Validate input
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    // Retrieve username and password
    $username = $request->input('username');
    $password = $request->input('password');

    // Check if credentials are correct
    if ($username === 'admin' && $password === 'admin') {
        // Store in session if login successful
        session(['username' => $username]);
        // Redirect to the dashboard
        return redirect()->route('dashboard');
    }

    // Return back with error if credentials are incorrect
    return redirect()->back()->withErrors(['error' => 'Invalid username or password']);
}

    // Logout
    public function logout()
    {
        // Clear the session
        session()->forget('username');
        // Redirect to login page
        return redirect()->route('loginPage');
    }
}
