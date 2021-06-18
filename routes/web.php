<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('welcome');

Route::middleware(['auth'])->group(function (){
    Route::view('dashboard','dashboard')->name('dashboard');

    Route::view('profile','user.profile')->name('profile');

    Route::view('setting','user.setting')->name('setting');

    Route::post('image-profile',[\App\Http\Controllers\User\ImageProfile::class, 'store'])
        ->name('image.profile');

    Route::view('access', 'access.access')->name('access');
});


require __DIR__.'/auth.php';
