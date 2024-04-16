<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BarController;
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
Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'index');
});
Route::controller(BarController::class)->group(function () {
    Route::get('/bar', 'index');
});
