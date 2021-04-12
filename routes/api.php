<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('products', 'api\\ProductController@index');
Route::post('products', 'api\\ProductController@store');
Route::get('products/{id}', 'api\\ProductController@show');
Route::put('products/{id}', 'api\\ProductController@update');
Route::delete('products/{id}', 'api\\ProductController@destroy');

Route::get('categories', 'api\\CategoryController@index');
Route::post('categories', 'api\\CategoryController@store');
Route::get('categories/{id}', 'api\\CategoryController@show');
Route::put('categories/{id}', 'api\\CategoryController@update');
Route::delete('categories/{id}', 'api\\CategoryController@destroy');
