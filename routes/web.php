<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BarController;
use App\Http\Controllers\BSliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChairController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiningController;
use App\Http\Controllers\FairController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TermsController;
use App\Models\b_slider;
use App\Models\category;
use App\Models\product;
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
Route::get('/layouts/product', function () {
    $categories = category::get();
    return view('layouts.product.index', [
        'categories' => $categories,
    ]);
});
Route::controller(ChairController::class)->group(function () {
    $products = product::get();
    Route::get('/layouts/chair', 'index');
    Route::get('/layouts/chair/sofa', 'sofa');
    Route::get('/layouts/chair/sidetable', 'sidetable');
    Route::get('/layouts/chair/sideboard', 'sideboard');
});
Route::controller(DiningController::class)->group(function () {
    $products = product::get();
    Route::get('/layouts/dining', 'index');
    Route::get('/layouts/dining/coffee', 'coffee');
    Route::get('/layouts/dining/console', 'console');
    Route::get('/layouts/dining/bedside', 'bedside');
    Route::get('/layouts/dining/desk', 'desk');
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
    Route::get('/', function () {
        return view('auth.login');
    });
    Route::get('/login', function () {
        return view('auth.logout');
    });
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::controller(SliderController::class)->group(function () {
        Route::group(['prefix' => 'slider'], function () {
            Route::get('/', 'index');
            Route::get('/create', 'view')->name('slider.view');
            Route::post('/store', 'store')->name('slider.store');
            Route::get('/create', 'create')->name('slider.list');
            Route::get('/edit{id}', 'edit')->name('slider.edit');
            Route::post('/edit{id}', 'update')->name('slider.update');
            Route::post('/delete', 'destroy')->name('slider.destroy');
        });
    });
    Route::controller(BSliderController::class)->group(function () {
        Route::group(['prefix' => 'b_slider'], function () {
            Route::get('/', 'index');
            Route::get('/create', 'view')->name('b_slider.view');
            Route::post('/store', 'store')->name('b_slider.store');
            Route::get('/create', 'create')->name('b_slider.list');
            Route::get('/edit{id}', 'edit')->name('b_slider.edit');
            Route::post('/edit{id}', 'update')->name('b_slider.update');
            Route::post('/delete', 'destroy')->name('b_slider.destroy');
        });
    });
    Route::controller(NewsletterController::class)->group(function () {
        Route::group(['prefix' => 'newsletter'], function () {
            Route::get('/', 'index');
            Route::get('/', 'view')->name('newsletter.view');
            Route::post('/search', 'search')->name('newsletter.search');
            Route::get('/create', 'create')->name('newsletter.list');
            Route::post('/delete', 'destroy')->name('newsletter.destroy');
        });
    });
    Route::controller(ContactController::class)->group(function () {
        Route::group(['prefix' => 'contact'], function () {
            // Route::get('/', 'index')->name('contact.list');
            // Route::get('/', 'view')->name('contact.view');
            Route::get('/', 'view')->name('contact.view');
            Route::get('/search', 'search')->name('contact.search');
            Route::get('/create', 'create')->name('contact.list');
            Route::post('/delete', 'destroy')->name('contact.destroy');
        });
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::group(['prefix' => 'category'], function () {
            Route::get('/categories', 'index')->name('category.list');
            Route::get('/categories', 'view')->name('category.view');
            Route::get('/search', 'search')->name('category.search');
            Route::get('/add', 'create')->name('category.create');
            Route::post('/add', 'store')->name('category.store');
            Route::get('/edit/{id}', 'edit')->name('category.edit');
            Route::post('/edit/{id}', 'update')->name('category.update');
            Route::post('/delete', 'destroy')->name('category.destroy');
        });
    });
    Route::controller(ProductController::class)->group(function () {
        Route::group(['prefix' => 'product'], function () {
            Route::get('/products', 'index')->name('product.list');
            Route::get('/products', 'view')->name('product.view');
            Route::get('/search', 'search')->name('product.search');
            Route::get('/create', 'create')->name('product.create');
            Route::post('/create', 'store')->name('product.store');
            Route::get('/edit/{id}', 'edit')->name('product.edit');
            Route::post('/edit/{id}', 'update')->name('product.update');
            Route::post('/delete', 'destroy')->name('product.destroy');
        });
    });
});
// Route::get('/layouts/product/prodetail/{id}', function () {
//     return view('layouts.product.prodetail');
// });
Route::controller(AboutController::class)->group(function () {
    Route::get('/layouts/about', 'index');
    Route::get('/admin/ManagePage/about', 'create')->name('about.create');
    Route::post('/admin/ManagePage/about', 'store')->name('about.store');
    Route::post('/admin/ManagePage/about', 'edit')->name('about.edit');
});
Route::controller(BarController::class)->group(function () {
    Route::get('/layouts/bar', 'index');
    Route::get('/layouts/bar/bookselves', 'bookselves');
    Route::get('/layouts/bar/shelving', 'shelving');
    Route::get('/layouts/bar/tv', 'tv');
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
Route::controller(ProductController::class)->group(function () {
    Route::get('/layouts/product/prodetail/{id}', 'show')->name('product.show');
});
Route::controller(NewsletterController::class)->group(function () {
    Route::post('/layouts/newsletter/store', 'store')->name('newsletter.store');
});
Route::controller(TermsController::class)->group(function () {
    Route::group(['prefix' => 'layouts/terms'], function () {
        Route::get('/', 'index');
    });
    Route::get('/admin/ManagePage/term', 'create')->name('term.create');
    Route::post('/admin/ManagePage/term/store', 'store')->name('term.store');
    // Route::post('/admin/ManagePage/term/edit', 'edit')->name('term.edit');
});
Route::controller(PrivacyController::class)->group(function () {
    Route::get('/layouts/privacy', 'index');
    Route::get('/admin/ManagePage/privacy', 'create');
    Route::post('/admin/ManagePage/privacy/store', 'store')->name('privacy.store');
    Route::post('/admin/ManagePage/privacy/edit', 'edit')->name('privacy.edit');
    Route::get('/admin/ManagePage/return', 'returncreate');
});

