<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
});


Route::middleware(['guest'])->group(function () {
    // route login
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    
});

Route::middleware(['auth'])->group(function () {
    // route admin dasboard
    Route::get('/admin', [AdminController::class, 'view'])->name('admin');
    // route logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});

