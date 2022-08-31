<?php

use App\Http\Controllers\Auth\OrganizationController;
use App\Http\Controllers\Auth\StoreController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('login-organization', [OrganizationController::class, 'loginOrganization'])->name('login-organization');
    Route::get('login-store', [StoreController::class, 'loginStore'])->name('login-store');
    Route::post('login-organization', [OrganizationController::class, 'setOrganization']);
    Route::post('login-store', [StoreController::class, 'setStore'])->name('login-store');
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/clients', [ClientController::class, 'index'])->name('clients');
    Route::get('/mailbox', [MailboxController::class, 'index'])->name('mailbox');
    Route::get('/orders', [OrderController::class, 'list'])->name('orders');
    Route::get('/configuration', [ConfigurationController::class, 'index'])->name('configuration');
    Route::get('/tools', [ToolsController::class, 'index'])->name('tools');
});
