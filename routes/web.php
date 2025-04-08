<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [App\Http\Controllers\registerController::class, 'create'])->name('register'); 
Route::post('/register', [App\Http\Controllers\registerController::class, 'store'])->name('register'); 