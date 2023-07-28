<?php

use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MediaAjaxController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MediaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/master', function () {
    return view('pages.dashboard');
});


Auth::routes();


Route::group(['middleware' => 'auth','as' => 'admin.','prefix'=>'admin'],function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('services',ServiceController::class);
    Route::resource('media-lists',MediaAjaxController::class);
    Route::resource('products',ProductController::class);
    Route::resource('orders',OrderController::class);
    Route::resource('customers',CustomerController::class);
    Route::get('customers/services-orders/{id}' ,[CustomerController::class,'services_orders'])->name('customers.services-orders');
    Route::get('customers/products-orders/{id}',[CustomerController::class,'products_orders'])->name('customers.products-orders');
    Route::resource('payments',PaymentController::class);
    Route::group(['as' => 'settings.'],function(){
        Route::resource('pages'   ,PageController::class);
    });

    Route::controller(SettingController::class)->group(function(){
        Route::get('settings/general' ,'settings_general')->name('settings.general');
        Route::post('settings/general/store','save_general_setting')->name('settings.general.store');
        Route::get('settings/payments','settings_payments')->name('settings.payments');
        Route::post('settings/payments/store','save_settings_payments')->name('settings.payments.store');
    });

    Route::delete('medias/delete-all',[MediaController::class,'delete_all'])->name('medias.delete_all');
    Route::resource('medias',MediaController::class);
});

Route::get('/search',[ServiceController::class, 'search'])->name('search');
Route::get('/filter',[ServiceController::class, 'filter'])->name('filter');


Route::get('/',[FrontController::class,'index']);
Route::get('/shop',[FrontController::class,'shop']);
Route::get('/product/{slug}',[FrontController::class,'single_product']);
Route::get('/services',[FrontController::class,'services']);
Route::get('/service/{slug}',[FrontController::class,'single_service']);
Route::post('application-submit/{id}',[FrontController::class,'application_submit'])->name('application-submit');
Route::get('my-account',[FrontController::class,'my_account'])->name('my-account');
Route::get('my-orders',[FrontController::class,'my_orders'])->name('my-orders');
Route::get('my-services',[FrontController::class,'my_services'])->name('my-services');
Route::get('setting-account',[FrontController::class,'setting_account'])->name('setting-account');

Route::get('/{slug}',[FrontController::class,'index']);