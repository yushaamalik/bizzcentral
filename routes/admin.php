<?php

use Illuminate\Support\Facades\Route;


Auth::routes();


Route::get('/home', 'HomeController@home')->name('dashboard');

Route::get('/category/list', 'CategoriesController@index')->name('category.index');
Route::get('/category/list/single-category/{id}', 'CategoriesController@single')->name('category.single');
Route::get('/category/edit-category/{id}', 'CategoriesController@edit')->name('category.edit');
Route::put('/category/update-category/{id}', 'CategoriesController@update')->name('category.update');
Route::get('/category/add-new', 'CategoriesController@create')->name('category.create');
Route::post('/category/save-new', 'CategoriesController@store')->name('category.save');
Route::delete('/delete-category/{id}', 'CategoriesController@delete')->name('category.delete');

Route::get('/queries', 'OrdersController@index')->name('orders.index');

Route::get('/products/list', 'ProductsController@index')->name('products.index');
Route::get('/products/list/single-product/{id}', 'ProductsController@single')->name('products.single');
Route::get('/products/edit-product/{id}', 'ProductsController@edit')->name('products.edit');
Route::put('/products/update-product/{id}', 'ProductsController@update')->name('product.update');
Route::get('/products/add-new', 'ProductsController@create')->name('product.create');
Route::post('/products/save-new', 'ProductsController@store')->name('product.store');
Route::delete('/delete-product/{id}', 'ProductsController@delete')->name('product.delete');

