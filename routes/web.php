<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeroController;

Route::middleware(['guest'])->group(function () {
    // route login
    Route::get('/Login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/Login', [AuthController::class, 'login']);
    
});

Route::middleware(['auth'])->group(function () {
    // route admin dasboard
    Route::get('/Admin', [AdminController::class, 'view'])->name('admin');

    // route tabel user
    Route::get('/Users', [AdminController::class, 'users'])->name('users.index');

    // route logout
    Route::post('/Logout', [AuthController::class, 'logout'])->name('logout');

    // route portofolio
    Route::get('/Hero', [HeroController::class, 'view'])->name('hero.index');
    Route::get('/Hero/Create', [HeroController::class, 'create'])->name('hero.create');
    Route::post('/Hero/Create', [HeroController::class, 'store'])->name('hero.store');
    Route::get('/Hero/Edit/{hero}', [HeroController::class, 'edit'])->name('hero.edit');
    Route::put('/Hero/Edit/{hero}', [HeroController::class, 'update'])->name('hero.update');
    Route::delete('/Hero/{hero}', [HeroController::class, 'destroy'])->name('hero.destroy');
});

