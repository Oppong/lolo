<?php

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


//--------------- resource controllers ---------------//

Route::get('/', 'PagesController@index');

Route::resource('/skirts', 'SkirtsController');

Route::resource('cart', 'CartController');

Route:: resource('checkout', 'CheckoutController');

Route::resource('thankyou', 'ConfirmationController');

Route::resource('tops', 'TopsController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
