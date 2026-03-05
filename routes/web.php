<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeroController;

Route::get('/', function () {
    return view('index');
});

Route::middleware(['guest'])->group(function () {

    // route login
    Route::get('/Login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/Login', [AuthController::class, 'login']);

});

Route::middleware(['auth'])->group(function () {

    // route admin dashboard
    Route::get('/Admin', [AdminController::class, 'view'])->name('admin');

    // route tabel user
    Route::get('/Users', [AdminController::class, 'users'])->name('users.index');

    // route logout
    Route::post('/Logout', [AuthController::class, 'logout'])->name('logout');

    // route hero
    Route::get('/Hero', [HeroController::class, 'view'])->name('hero.index');
    Route::get('/Hero/create', [HeroController::class, 'create'])->name('hero.create');
    Route::post('/Hero/create', [HeroController::class, 'store'])->name('hero.store');
    Route::get('/Hero/edit/{hero}', [HeroController::class, 'edit'])->name('hero.edit');
    Route::put('/Hero/edit/{hero}', [HeroController::class, 'update'])->name('hero.update');
    Route::delete('/Hero/{hero}', [HeroController::class, 'destroy'])->name('hero.destroy');

});