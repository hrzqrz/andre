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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', 'MainPageController');
Route::resource('/pages/shop', 'ShopController')->except(['create', 'store', 'show', 'edit', 'update', 'destroy']);
Route::get('/pages/product/{slug}', 'ShopController@show')->name('shop.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
