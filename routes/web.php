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

Route::get('/', 'PagesController@index')->name('pages.index');
Route::get('/categories', 'CategoriesController@index')->name('category.index');
Route::get('/categories/category-single/{id}', 'CategoriesController@single')->name('category.single');
Route::get('/products', 'ProductsController@index')->name('products.index');
Route::get('products/single-product/{id}', 'ProductsController@single')->name('products.single');

Route::get('/send-query/{id}', 'OrdersController@index')->name('orders.index');
Route::post('/send-query/save', 'OrdersController@store')->name('orders.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
