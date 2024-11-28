<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('salish/home');
});

Route::get('/textbox', function () {
    return view('salish/textbox');
});

Route::get('/welcome', function () { 
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
