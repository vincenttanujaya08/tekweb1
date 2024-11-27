<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Redirect to login page or home route by default
Route::get('/', function () {
    if (session('username')) {
        return redirect()->route('dashboard');
    }
    return view('home/homePage');
})->name('homePage');


Route::get('/login/loginPage', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('/main/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/login/loginPage', [AuthController::class, 'login']);


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
