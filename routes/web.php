<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact-us', function () {
    return view('contactUs');
})->name('contactUs');

Route::get('/donation', function () {
    return view('donation');
})->name('donation');
