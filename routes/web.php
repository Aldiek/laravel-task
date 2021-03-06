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
Route::get('/', 'HomeController@admin');
Route::get('/home', 'HomeController@admin');

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

});
