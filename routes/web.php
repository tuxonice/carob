<?php

use App\Http\Controllers\Admin\Auth\AdminOrganizationController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MailboxController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ToolsController;
use App\Http\Controllers\Shop\Auth\ShopOrganizationController;
use App\Http\Controllers\Shop\Auth\ShopStoreController;
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

Route::domain(config('carob.shop_domain'))->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('login-organization', [ShopOrganizationController::class, 'loginOrganization'])->name('shop-login-organization');
        Route::get('login-store', [ShopStoreController::class, 'loginStore'])->name('shop-login-store');
        Route::post('login-organization', [ShopOrganizationController::class, 'setOrganization']);
        Route::post('login-store', [ShopStoreController::class, 'setStore']);
        Route::get('/', \App\Http\Controllers\Shop\DashboardController::class)->name('shop-dashboard');
        Route::get('/dashboard', \App\Http\Controllers\Shop\DashboardController::class)->name('shop-dashboard');
        Route::get('/clients', [\App\Http\Controllers\Shop\ClientController::class, 'list'])->name('shop-clients');
        Route::get('/mailbox', [\App\Http\Controllers\Shop\MailboxController::class, 'index'])->name('shop-mailbox');
        Route::get('/orders', [\App\Http\Controllers\Shop\OrderController::class, 'list'])->name('shop-orders');
        Route::get('/configuration', [\App\Http\Controllers\Shop\ConfigurationController::class, 'index'])->name('shop-configuration');
        Route::get('/tools', [\App\Http\Controllers\Shop\ToolsController::class, 'index'])->name('shop-tools');
    });
});

Route::domain(config('carob.admin_domain'))->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('login-organization', [AdminOrganizationController::class, 'loginOrganization'])->name('admin-login-organization');
        Route::post('login-organization', [AdminOrganizationController::class, 'setOrganization']);
        Route::get('/', DashboardController::class)->name('admin-dashboard');
        Route::get('/dashboard', DashboardController::class)->name('admin-dashboard');
        Route::get('/clients', [ClientController::class, 'index'])->name('admin-clients');
        Route::get('/mailbox', [MailboxController::class, 'index'])->name('admin-mailbox');
        Route::get('/orders', [OrderController::class, 'list'])->name('admin-orders');
        Route::get('/configuration', [ConfigurationController::class, 'index'])->name('admin-configuration');
        Route::get('/tools', [ToolsController::class, 'index'])->name('admin-tools');
    });
});

Route::get('/', function () {
    return View('home');
});
