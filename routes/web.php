<?php

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



Auth::routes();

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/home', 'UserController@index')->name('home')->middleware('auth');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/profile', 'UserController@edit')->name('profile')->middleware('auth');
Route::post('/edit', 'UserController@update')->name('edit')->middleware('auth');

/* Customer ------------------------------------------------------------------*/
Route::get('/customer/{id}', 'CustomerController@show')->name('show')->middleware('auth','customer');
Route::get('/customer/beli/{user_id}/{ikan_id}', 'CustomerController@menuBeli')->name('pembelian')->middleware('auth','customer');

/* Seller ------------------------------------------------------------------*/
Route::get('/seller/tambahikan', 'SellerController@add')->name('add')->middleware('auth','seller');
Route::post('/seller/upload', 'SellerController@upload')->name('upload')->middleware('auth','seller');
Route::get('/seller/show', 'SellerController@show')->name('show')->middleware('auth','seller');
Route::get('/seller/edit/{id}', 'SellerController@edit')->name('editikan')->middleware('auth','seller');
Route::post('/seller/edit/store', 'SellerController@update')->name('store')->middleware('auth','seller');
Route::delete('/seller/hapus/{id}', 'SellerController@delete')->name('hapus')->middleware('auth','seller');
