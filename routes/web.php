<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/login', function () {
    return view('login');
});
