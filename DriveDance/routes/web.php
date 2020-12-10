<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;

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


Route::get('/', function () { return view('home');})->name('home');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/drivedance/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/drivedance/admin/logout', [AdminController::class, 'logout'])->name('logout');

Route::post('/drivedance/admin/signin', [AdminController::class, 'signin'])->name('admin_signin');
