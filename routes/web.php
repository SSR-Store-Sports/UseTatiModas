<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/register', function () {
    return view('register.index');
});

Route::get('/', function () {
    return view('index');
});




