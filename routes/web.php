<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MediaAjaxController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('pages.dashboard');
});


Auth::routes();


Route::group(['middleware' => 'auth','as' => 'admin.'],function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('services',ServiceController::class);
    Route::resource('media-lists',MediaAjaxController::class);
    Route::resource('products',ProductController::class);
});

Route::get('/search',[ServiceController::class, 'search'])->name('search');
