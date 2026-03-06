<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;


Route::middleware(['guest'])->group(function () {

    // route login
    Route::get('/Login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/Login', [AuthController::class, 'login']);
    // route landingpage
    Route::get('/', [HomeController::class, 'view']);

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
    Route::get('/Hero/Create', [HeroController::class, 'create'])->name('hero.create');
    Route::post('/Hero/Create', [HeroController::class, 'store'])->name('hero.store');
    Route::get('/Hero/Edit/{hero}', [HeroController::class, 'edit'])->name('hero.edit');
    Route::put('/Hero/Edit/{hero}', [HeroController::class, 'update'])->name('hero.update');
    Route::delete('/Hero/{hero}', [HeroController::class, 'destroy'])->name('hero.destroy');

     // route info
    Route::get('/Information', [InfoController::class, 'view'])->name('information.index');
    Route::get('/Information/Edit/{information}', [InfoController::class, 'edit'])->name('information.edit');
    Route::put('/Information/Edit/{information}', [InfoController::class, 'update'])->name('information.update');

    // route galeri
    Route::get('/Gallery', [GalleryController::class, 'view'])->name('gallery.index');
    Route::get('/Gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/Gallery/create', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/Gallery/edit/{gallery}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/Gallery/edit/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/Gallery/{gallery}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
    
    // route product
    Route::get('/Product', [ProductController::class, 'view'])->name('product.index');
    Route::get('/Product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/Product/create', [ProductController::class, 'store'])->name('product.store');
    Route::get('/Product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/Product/edit/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/Product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

});