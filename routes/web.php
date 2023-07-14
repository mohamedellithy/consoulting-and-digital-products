<?php

use App\Http\Controllers\ServiceController;
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
Route::get('/list_services', [ServiceController::class, 'index'])->name('list_services');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add_service', [ServiceController::class, 'create'])->name('add_service');
Route::post('/store_service', [ServiceController::class, 'store'])->name('store');
Route::get('/edite_service/{service_id}', [ServiceController::class, 'edit'])->name('edit');
Route::put('/update/{service_id}', [ServiceController::class, 'update'])->name('update');
Route::get('/delete_service/{service_id}', [ServiceController::class, 'delete'])->name('delete');
Route::get('/show_service/{service_id}', [ServiceController::class, 'show'])->name('show');

// Route::get('/createServices', function (){
//     return view('pages.admin.services._form');

// });
