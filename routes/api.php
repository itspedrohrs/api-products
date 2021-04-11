<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('products', 'ProductController@index');
Route::post('products', 'ProductController@create');
Route::get('products/{id}', 'ProductController@show');
Route::put('products/{id}', 'ProductController@update');
Route::delete('products/{id}', 'ProductController@delete');

Route::get('categories', 'CategoryController@index');
Route::post('categories', 'CategoryController@store');
Route::get('categories/{id}', 'CategoryController@show');
Route::put('categories/{id}', 'CategoryController@update');
Route::delete('categories/{id}', 'CategoryController@delete');
