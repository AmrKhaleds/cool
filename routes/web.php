<?php

use App\Http\Controllers\Admin\BannerSettingController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\NumberController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WhyChooseUsController;
use App\Models\BannerSetting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/change-lang/{lang}', function ($lang) {
    session(['locale' => $lang]);
    app()->setLocale($lang);
    return back();
})->name('lang.switch');


// Front Routes
Route::group(['as' => 'front.'], function () {
    Route::get('/', HomeController::class)->name('index');

    Route::post('booking_service', 'App\Http\Controllers\Front\BookingController@store')->name('booking_service');
});


// Admin Routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    // Users Routes
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    // Services
    Route::resource('services', ServiceController::class);

    Route::resource('numbers', NumberController::class);

    // Bookings
    Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::delete('bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');

    // Edit banner
    Route::get('banners', [BannerSettingController::class, 'edit'])->name('banners.edit');
    Route::put('banners', [BannerSettingController::class, 'update'])->name('banners.update');

    // Why Choose Us
    Route::get('why-choose-us', [WhyChooseUsController::class, 'edit'])->name('why-choose-us.edit');
    Route::put('why-choose-us/update', [WhyChooseUsController::class, 'update'])->name('why-choose-us.update');


    // Settings
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');
});

Auth::routes(['register' => false, 'login' => true, 'logout' => true, 'reset' => false, 'verify' => false]);
