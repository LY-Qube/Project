<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    return view('user.profile');
})->name('profile');

require __DIR__.'/auth.php';
