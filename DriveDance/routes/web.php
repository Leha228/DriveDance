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

/* Router */

Route::get('/', function () { 
    $count = DB::table('visitor')->where('id','=',1)->value('count');

    DB::table('visitor')->where('id', '=', 1)->update([
        'count' => $count + 1
    ]);

    return view('home', ['count' => $count]);
})->name('home');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/timing', function () { return view('timing');})->name('timing');
Route::get('/feedback', function () { return view('feedback');})->name('feedback');
Route::get('/contact', function () { return view('contact');})->name('contact');

/* AdminController */
Route::get('/drivedance/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/drivedance/adminPay', [AdminController::class, 'indexPay'])->name('adminPay');
Route::get('/drivedance/admin/logout', [AdminController::class, 'logout'])->name('logout');
Route::post('/drivedance/admin/signin', [AdminController::class, 'signin'])->name('admin_signin');
Route::post('/drivedance/admin/newsCreate', [AdminController::class, 'createNews'])->name('admin_create_news');
Route::post('/drivedance/admin/newsUpdate', [AdminController::class, 'updateNews'])->name('admin_update_news');
Route::post('/drivedance/admin/newsDelete', [AdminController::class, 'deleteNews'])->name('admin_delete_news');

/** NewsController */
Route::get('/news/{id}', function($id) {
    $posts = DB::table('posts')->where('id', '=', $id)->first();
    return view('fullNews', ['posts' => $posts]);
})->name('fullNews');

/** PricingController */
Route::post('/pricing/pay', [PricingController::class, 'pay'])->name('pay');