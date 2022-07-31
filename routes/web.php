<?php

use App\Http\Controllers\Auth\OrganizationController;
use App\Http\Controllers\Auth\StoreController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailboxController;
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

Route::get('login-organization', function () {
    return view('auth.login-organization');
})->name('login-organization')->middleware(['auth']);

Route::get('login-store', function () {
    return view('auth.login-store');
})->name('login-store')->middleware(['auth']);

Route::post('login-organization', [OrganizationController::class, 'setOrganization'])->middleware(['auth']);

Route::post('login-store', [StoreController::class, 'setStore'])->name('login-store')->middleware(['auth']);

Route::get('/', DashboardController::class)->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', DashboardController::class)->middleware(['auth'])->name('dashboard');
Route::get('/clients', [ClientController::class, 'index'])->middleware(['auth'])->name('clients');
Route::get('/mailbox', [MailboxController::class, 'index'])->middleware(['auth'])->name('mailbox');
Route::get('/orders', [OrderController::class, 'list'])->middleware(['auth'])->name('orders');
Route::get('/configuration', [ConfigurationController::class, 'index'])->middleware(['auth'])->name('configuration');
Route::get('/tools', [ToolsController::class, 'index'])->middleware(['auth'])->name('tools');

