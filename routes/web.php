<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Rutas para el flujo de registro
Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
