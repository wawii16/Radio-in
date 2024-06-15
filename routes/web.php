<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/radio', function () {
    return view('radio');
});

Route::get('/podcast', function () {
    return view('podcast');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
