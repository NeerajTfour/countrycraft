<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BarController;
use App\Http\Controllers\BSliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChairController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FairController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TermsController;
use App\Models\b_slider;
use App\Models\slider;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $sliders = slider::get();
    $bsliders = b_slider::get();
    return view('layouts.home.index', [
        'sliders' => $sliders,
        'bsliders' => $bsliders,
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
    Route::controller(BSliderController::class)->group(function () {
        Route::group(['prefix' => 'b_slider'], function () {
            Route::get('/', 'index');
            Route::post('/store', 'store')->name('b_slider.store');
        });
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::group(['prefix' => 'category'], function () {
            Route::get('/categories', 'index')->name('category.list');
            Route::get('/add', 'create')->name('category.create');
            Route::post('/add', 'store')->name('category.store');
            Route::get('/edit/{id}', 'edit')->name('category.edit');
            Route::post('/edit/{id}', 'update')->name('category.update');
            Route::post('/delete', 'destroy')->name('category.destroy');
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
Route::controller(FairController::class)->group(function () {
    Route::group(['prefix' => 'layouts/fair'], function () {
        Route::get('/', 'index');
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
        Route::get('/', 'index');
    });
    Route::get('/admin/ManagePage/term', 'create');
    Route::post('/admin/ManagePage/term', 'store')->name('term.store');
    Route::post('/admin/ManagePage/term', 'edit')->name('term.edit');

});
Route::controller(PrivacyController::class)->group(function () {
    Route::get('/layouts/privacy', 'index');
    Route::get('/admin/ManagePage/privacy', 'create');

});

