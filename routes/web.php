<?php

use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventdetailController;
use App\Http\Controllers\BuyTicketsController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

// Route ke halaman utama
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Route ke halaman profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

// Route dari event dashboard untuk menampilkan detail event menggunakan id pada database
Route::get('/event/{id}', [EventdetailController::class,'show'])->name('event.show');

// Route dari event detail ke halaman pilih tiket (BuyTicketsController)
Route::get('/buy-ticket/{event_id}', [BuyTicketsController::class, 'index'])->name('buy-ticket');

// Routing ke halaman History lewat lingkaran profile
Route::get('/history', [HistoryController::class, 'index'])->name('profile.history');

// Route login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

