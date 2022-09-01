<?php

use App\Http\Controllers\Auth\AdminOrganizationController;
use App\Http\Controllers\Auth\ShopOrganizationController;
use App\Http\Controllers\Auth\ShopStoreController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailboxController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ToolsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';

Route::domain('shop.carob.local')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('login-organization', [ShopOrganizationController::class, 'loginOrganization'])->name('shop-login-organization');
        Route::get('login-store', [ShopStoreController::class, 'loginStore'])->name('shop-login-store');
        Route::post('login-organization', [ShopOrganizationController::class, 'setOrganization']);
        Route::post('login-store', [ShopStoreController::class, 'setStore']);
        Route::get('/', DashboardController::class)->name('dashboard');
        Route::get('/dashboard', DashboardController::class)->name('dashboard');
        Route::get('/clients', [ClientController::class, 'index'])->name('clients');
        Route::get('/mailbox', [MailboxController::class, 'index'])->name('mailbox');
        Route::get('/orders', [OrderController::class, 'list'])->name('orders');
        Route::get('/configuration', [ConfigurationController::class, 'index'])->name('configuration');
        Route::get('/tools', [ToolsController::class, 'index'])->name('tools');
    });
});

Route::domain('admin.carob.local')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('login-organization', [AdminOrganizationController::class, 'loginOrganization'])->name('admin-login-organization');
        Route::post('login-organization', [AdminOrganizationController::class, 'setOrganization']);
        Route::get('/', DashboardController::class)->name('dashboard');
        Route::get('/dashboard', DashboardController::class)->name('dashboard');
        Route::get('/clients', [ClientController::class, 'index'])->name('clients');
        Route::get('/mailbox', [MailboxController::class, 'index'])->name('mailbox');
        Route::get('/orders', [OrderController::class, 'list'])->name('orders');
        Route::get('/configuration', [ConfigurationController::class, 'index'])->name('configuration');
        Route::get('/tools', [ToolsController::class, 'index'])->name('tools');
    });
});
