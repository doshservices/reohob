<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
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
    return view('web.index');
});

Route::get('/about', function () {
    return view('web.about');
});

Route::get('/terms', function () {
    return view('web.terms');
});

Route::get('/solar-panels', function () {
    return view('web.solar');
});

Route::get('/inverters', function () {
    return view('web.inverters');
});

Route::get('/batteries', function () {
    return view('web.batteries');
});

Route::get('/security-systems', function () {
    return view('web.security-systems');
});

Route::get('/charging-station', function () {
    return view('web.charging-station');
});

// Route::get('/get-quote', function () {
//     return view('web.quote');
// });

Route::get('/training-program', function () {
    return view('web.training');
});

Route::get('/payment-plan', function () {
    return view('web.payment-plan');
});

Route::get('/reohob-initiative', function () {
    return view('web.reohob-initiative');
});

Route::get('/contact-reohob', function () {
    return view('web.contact');
});
Route::get('/warranty', function () {
    return view('web.warranty');
});
// Route::get('/test','App\Http\Controllers\MainController@processForm');


Route::get('/get-quote','App\Http\Controllers\MainController@quote');
Route::get('/test','App\Http\Controllers\MainController@test');


Route::post('/payment/verification', 'App\Http\Controllers\MainController@verifyPayment');

Route::post('/inverter','App\Http\Controllers\MainController@processForm');
Route::post('/batteries','App\Http\Controllers\MainController@processForm');
Route::post('/solar','App\Http\Controllers\MainController@processForm');
Route::post('/security','App\Http\Controllers\MainController@processForm');
Route::post('/charging','App\Http\Controllers\MainController@processForm');
Route::post('/contact','App\Http\Controllers\MainController@contactForm');

Route::post('/training','App\Http\Controllers\MainController@trainingForm');

Route::post('/quote','App\Http\Controllers\MainController@quoteForm');
Route::post('/request/quote','App\Http\Controllers\MainController@quoteProcess');

Auth::routes();
Route::get('/login/admin', 'App\Http\Controllers\AdminController@adminLoginForm');
Route::post('/login/admin', 'App\Http\Controllers\AdminController@adminLogin');
Route::post('/admin/logout', 'App\Http\Controllers\AdminController@adminLogout');
Route::get('/admin/logout', 'App\Http\Controllers\AdminController@adminLogout');

Route::group(['prefix' => 'shop'], function(){
    Route::get('/', 'App\Http\Controllers\MainController@redirectToShop');
    
});


Route::group(['middleware' => ['admin'], 'prefix' => 'admin',], function() {

    Route::get('/', 'App\Http\Controllers\AdminController@products')->name('All Products');
    Route::get('/bookings', 'App\Http\Controllers\AdminController@booking_orders')->name('Orders');
    Route::get('/bookings/{id}', 'App\Http\Controllers\AdminController@booking_order')->name('Order Details');

    Route::get('/trainees', 'App\Http\Controllers\AdminController@trainees')->name('Trainees');
    Route::get('/trainees/{id}', 'App\Http\Controllers\AdminController@trainee')->name('Trainee Details');


    Route::get('/categories', 'App\Http\Controllers\AdminController@categories')->name('All Categories');
    Route::get('/categories/{id}', 'App\Http\Controllers\AdminController@category')->name('Category Details');
    Route::get('/categories/{id}/edit', 'App\Http\Controllers\AdminController@edit_category')->name('Edit Category');
    Route::post('/categories/{id}/edit', 'App\Http\Controllers\AdminController@edit_category_post');

    Route::post('/categories', 'App\Http\Controllers\AdminController@addCategory');
    Route::delete('/category-remove', 'App\Http\Controllers\AdminController@remove_category');


    Route::get('/products', 'App\Http\Controllers\AdminController@products')->name('All Product');
    Route::get('/products/{id}', 'App\Http\Controllers\AdminController@product')->name('Product Details');

    Route::get('/products/{id}/edit', 'App\Http\Controllers\AdminController@editProduct')->name('Edit Product');

    Route::get('/create-product', 'App\Http\Controllers\AdminController@createProduct')->name('Create Product');
    Route::post('/create-product', 'App\Http\Controllers\AdminController@createProductForm');
    Route::post('/edit-product/{id}', 'App\Http\Controllers\AdminController@editProductForm');
    Route::delete('/product-remove', 'App\Http\Controllers\AdminController@remove_product');


    Route::get('/orders', 'App\Http\Controllers\AdminController@orders')->name('All Orders');
    Route::get('/orders/{id}', 'App\Http\Controllers\AdminController@order')->name('Order Details');

    Route::get('/users', 'App\Http\Controllers\AdminController@users')->name('All Users');
    Route::get('/users/{id}', 'App\Http\Controllers\AdminController@user')->name('User Details');





    Route::post('/message/send', 'App\Http\Controllers\AdminController@send_message');

    Route::get('/administrators', 'App\Http\Controllers\AdminController@administrators')->name('Administrators');
    Route::get('/administrators/{id}', 'App\Http\Controllers\AdminController@administrator')->name('Administrator');
    Route::post('/administrators', 'App\Http\Controllers\AdminController@createAdministrator');

    Route::delete('/administrators', 'App\Http\Controllers\AdminController@remove_admin');


    Route::post('/change_password', 'App\Http\Controllers\AdminController@change_password');
   
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
