<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'pages.auth.login')->name('login');
Route::view('/register', 'pages.auth.register')->name('register');
Route::view('/feeds', 'pages.feeds')->name('feeds');

Route::view('all-pujas', 'pages.puja.pujas')->name('pujas');
Route::view('puja-details', 'pages.puja.single-puja-page')->name('pujaDetails');

Route::view('all-temples', 'pages.temples.temples')->name('temples');
Route::view('temple-details', 'pages.temples.single-temples')->name('templeDetails');

Route::view('/puja-packages','pages.packages.packages')->name('packages');

Route::view('/hotels', 'pages.hotels.hotels')->name('hotels');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/blogs', 'pages.blogs.blogs')->name('blogs');
Route::view('/blog-details', 'pages.blogs.single-blogs')->name('blogs.single');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');