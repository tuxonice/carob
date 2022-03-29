<?php

use App\Http\Controllers\Auth\OrganizationController;
use App\Http\Controllers\Auth\StoreController;
use App\Http\Controllers\DashboardController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('login-organization', function () {
    return view('auth.login-organization');
})->name('login-organization')->middleware(['auth']);

Route::get('login-store', function () {
    return view('auth.login-store');
})->name('login-store')->middleware(['auth']);

Route::post('login-organization', [OrganizationController::class, 'setOrganization'])->middleware(['auth']);

Route::post('login-store', [StoreController::class, 'setStore'])->name('login-store')->middleware(['auth']);

//Route::get('/', function () {
//    return view('dashboard');
//})->middleware(['auth']);

Route::get('/', DashboardController::class)->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', DashboardController::class)->middleware(['auth'])->name('dashboard');


