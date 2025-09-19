<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Menu pages (protected)
Route::middleware('web')->group(function () {
    Route::get('/profile', [PageController::class, 'profile'])->name('profile');
    Route::get('/tasks', [PageController::class, 'tasks'])->name('tasks');
    Route::get('/settings', [PageController::class, 'settings'])->name('settings');
});
