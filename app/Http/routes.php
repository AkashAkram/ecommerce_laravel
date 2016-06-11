<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ShopController@index');
Route::get('/category_id/{id}', 'ShopController@category_index');
Route::get('/product_id/{id}', 'ShopController@product');















Route::auth();

Route::get('/home', 'HomeController@index');
