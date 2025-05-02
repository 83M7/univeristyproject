<?php

use Illuminate\Support\Facades\Route;

Route::get('/w', function () {
    return view('welcome');
})->name('home');

Route::get('/', function () {
    return view('login');
})->name('login');
