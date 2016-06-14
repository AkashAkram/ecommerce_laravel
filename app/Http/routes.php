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
Route::get('/category_id/{cat_id}', 'ShopController@category_index');
Route::get('/product_id/{pro_id}', 'ShopController@product');
Route::get('/all_in_category/{Cat_id}', 'ShopController@all_in_cat');

Route::post('/product_id/{pro_id}/review', 'ShopController@review');















Route::auth();

Route::get('/home', 'HomeController@index');
