<?php

use App\Http\Controllers\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\Auth\ShopAuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::domain('shop.carob.local')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [ShopAuthenticatedSessionController::class, 'create'])
            ->name('shop-login');

        Route::post('login', [ShopAuthenticatedSessionController::class, 'store']);
    });

    Route::middleware('auth')->group(function () {
        Route::post('logout', [ShopAuthenticatedSessionController::class, 'destroy'])
            ->name('shop-logout');
    });
});

Route::domain('admin.carob.local')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [AdminAuthenticatedSessionController::class, 'create'])
            ->name('admin-login');

        Route::post('login', [AdminAuthenticatedSessionController::class, 'store']);
    });

    Route::middleware('auth')->group(function () {
        Route::post('logout', [AdminAuthenticatedSessionController::class, 'destroy'])
            ->name('admin-logout');
    });
});
