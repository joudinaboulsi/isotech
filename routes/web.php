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

Route::get('/', [
    'as' => 'home_path',
    'uses' => 'PagesController@home'
]);

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);

Route::get('/quality', [
    'as' => 'quality_path',
    'uses' => 'PagesController@quality'
]);

Route::get('/portfolio', [
    'as' => 'portfolio_path',
    'uses' => 'PagesController@portfolio'
]);

Route::get('/products', [
    'as' => 'products_path',
    'uses' => 'PagesController@products'
]);

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'PagesController@contact'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'PagesController@getContactForm'
]);