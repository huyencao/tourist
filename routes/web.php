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

Route::namespace('Backend')->prefix('admin')->group(function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('banner', 'BannerController');
    Route::resource('catetour', 'CategoryTourController');
    Route::resource('catenews', 'CategoryNewsController');
    Route::resource('media', 'MediaController');
});
