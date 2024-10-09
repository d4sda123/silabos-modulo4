<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

Route::view('/', 'login');

Route::view('/', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('roles', RoleController::class);
Route::get('roles/{role}/confirm-delete', [RoleController::class, 'confirmDelete'])->name('roles.confirmDelete');
Route::post('roles/{role}/restore', [RoleController::class, 'restore'])->name('roles.restore');


require __DIR__.'/auth.php';
