<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});
Route::get('/about', function () {
    return view('about.index');
});
Route::get('/contact', function () {
    return view('contact.index');
});
Route::get('/product', function () {
    return view('product.index');
});
