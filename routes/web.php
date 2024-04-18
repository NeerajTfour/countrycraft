<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BarController;
use App\Http\Controllers\ChairController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\TermsController;
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
Route::get('/product', function () {
    return view('product.prodetail');
});
Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'index');
});
Route::controller(BarController::class)->group(function () {
    Route::get('/bar', 'index');
});
Route::controller(ChairController::class)->group(function () {
    Route::get('/chair', 'index');
});
Route::controller(ShippingController::class)->group(function () {
    Route::get('/shipping', 'index');
});
Route::controller(TermsController::class)->group(function () {
    Route::get('/terms', 'index');
});
Route::controller(PrivacyController::class)->group(function () {
    Route::get('/privacy', 'index');
});
