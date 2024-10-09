<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('roles', RoleController::class);

require __DIR__.'/auth.php';
