<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventdetailController;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
// Route ke dashboard dan profile
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/event/{id}', [EventdetailController::class, 'show'])->name('event.show');

