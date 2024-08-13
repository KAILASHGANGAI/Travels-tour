<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'pages.auth.login')->name('login');
Route::view('/register', 'pages.auth.register')->name('register');
Route::view('/feeds', 'pages.feeds')->name('feeds');

Route::view('all-pujas', 'pages.puja.pujas')->name('pujas');
Route::view('all-temples', 'pages.temples.temples')->name('temples');
