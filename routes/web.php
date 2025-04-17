<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])->middleware('guest')->name('register');
Route::post('/logout', [App\Http\Controllers\SessionController::class, 'destroy'])->name('logout'); 

Route::get('/login', [App\Http\Controllers\SessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [App\Http\Controllers\SessionController::class, 'store'])->middleware('guest')->name('login');

Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware('auth')->name('dashboard');