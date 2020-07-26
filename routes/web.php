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

Route::match(['get', 'post'], '/', 'IndexController@execute')->name('index');
Route::match(['get', 'post'], 'hotDeals', 'HotDealsController@execute')->name('hotDeals');
Route::match(['get', 'post'], 'categories', 'CategoriesController@execute')->name('categories');
Route::match(['get', 'post'], 'laptops', 'LaptopsController@execute')->name('laptops');
Route::match(['get', 'post'], 'smartphones', 'SmartphonesController@execute')->name('smartphones');
Route::match(['get', 'post'], 'cameras', 'CamerasController@execute')->name('cameras');
Route::match(['get', 'post'], 'accessories', 'AccessoriesController@execute')->name('accessories');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
