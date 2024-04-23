<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BarController;
use App\Http\Controllers\ChairController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TermsController;
use App\Models\slider;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $sliders = slider::get();
    return view('layouts.home.index', [
        'sliders' => $sliders,
    ]);
});
// Route::get('/about', function () {
//     return view('layouts.about.index');
// });
// Route::get('/layouts/contact', function () {
//     return view('layouts.contact.index');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/welcome', function () {
        return view('admin.welcome');
    });
    Route::controller(SliderController::class)->group(function () {
        Route::group(['prefix' => 'slider'], function () {
            Route::get('/', 'index');
            Route::post('/store', 'store')->name('slider.store');
        });
    });
});
Route::get('/layouts/product', function () {
    return view('layouts.product.index');
});
Route::get('/layouts/product/prodetail', function () {
    return view('layouts.product.prodetail');
});
Route::controller(AboutController::class)->group(function () {
    Route::get('/layouts/about', 'index');
});
Route::controller(BarController::class)->group(function () {
    Route::get('/layouts/bar', 'index');
});
Route::controller(ChairController::class)->group(function () {
    Route::get('/layouts/chair', 'index');
});
Route::controller(ContactController::class)->group(function () {
    Route::group(['prefix' => 'layouts/contact'], function () {
        Route::get('/', 'index');
        Route::post('/store', 'store')->name('contact.store');
    });
});
Route::controller(ShippingController::class)->group(function () {
    Route::get('/layouts/shipping', 'index');
});
Route::controller(NewsletterController::class)->group(function () {
    Route::post('/layouts/newsletter/store', 'store')->name('newsletter.store');
});
Route::controller(TermsController::class)->group(function () {
    Route::group(['prefix' => 'layouts/terms'], function () {
        Route::get('/layouts/terms', 'index');
    });
});
Route::controller(PrivacyController::class)->group(function () {
    Route::get('/layouts/privacy', 'index');
});

