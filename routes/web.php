<?php

use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\StreamingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MediaAjaxController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ServiceOrderController;
use App\Http\Controllers\ReviewController;

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


Auth::routes();


Route::group(['middleware' => 'admin_auth','as' => 'admin.','prefix'=>'admin'],function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('services',ServiceController::class);
    Route::resource('media-lists',MediaAjaxController::class);
    Route::resource('products',ProductController::class);
    Route::resource('orders',OrderController::class);
    Route::resource('services-orders',ServiceOrderController::class);
    Route::resource('customers',CustomerController::class);
    Route::get('customers/services-orders/{id}' ,[CustomerController::class,'services_orders'])->name('customers.services-orders');
    Route::get('customers/products-orders/{id}',[CustomerController::class,'products_orders'])->name('customers.products-orders');
    Route::resource('payments',PaymentController::class);
    Route::resource('reviews',ReviewController::class);
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


Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('/shop',[FrontController::class,'shop'])->name('shop');
Route::get('/product/{slug}',[FrontController::class,'single_product'])->name('single_product');
Route::get('/services',[FrontController::class,'services'])->name('services');
Route::get('/service/{slug}',[FrontController::class,'single_service']);
Route::post('application-submit/{id}',[FrontController::class,'application_submit'])->name('application-submit');
Route::get('/contact-us',[FrontController::class,'contact_us'])->name('contact-us');

Route::group(['middleware' => 'auth'],function(){
    Route::get('my-account',[FrontController::class,'my_account'])->name('my-account');
    Route::get('my-orders',[FrontController::class,'my_orders'])->name('my-orders');
    Route::get('my-services',[FrontController::class,'my_services'])->name('my-services');
    Route::get('my-downloads',[FrontController::class,'my_downloads'])->name('my-downloads');
    Route::get('setting-account',[FrontController::class,'setting_account'])->name('setting-account');
    Route::post('buy-now',[FrontController::class,'buy_now'])->name('buy_now');
    Route::get('success',[FrontController::class,'payment_success'])->name('payments.success');
    Route::get('success-order/{order_no}',[FrontController::class,'thank_you_payment'])->name('thank_you_payment');
    Route::post('download-attachments',[FrontController::class,'download_attachments'])->name('download_attachments');
    Route::get('view-attachments/{attachment_id}',[StreamingController::class,'view_attachments'])->name('view_attachments');
    Route::get('download/{order_id}',[FrontController::class,'my_single_download'])->name('single_download');
    Route::post('update-account',[FrontController::class,'update_account'])->name('update-account');
    Route::post('add-review-on-product/{id}',[FrontController::class,'add_review_on_product'])->name('add_review_on_product');
});
Route::get('ajax-paginate-review-lists',[FrontController::class,'ajax_paginate_review_lists'])->name('ajax-paginate-review-lists');
Route::post('send-email',[FrontController::class,'post_contact_us'])->name('send-email');
Route::post('send-news-letter',[FrontController::class,'post_news_letter'])->name('send-news-letter');

Route::get('generate/sitemap',[FrontController::class,'generate_sitemap']);

Route::get('/{slug}',[FrontController::class,'custom_page']);


