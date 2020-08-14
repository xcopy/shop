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

Auth::routes([
    'login' => true,
    'logout' => true,
    'register' => false,
    'reset' => false,
    'confirm' => false
]);

Route::get('{category?}', 'ProductController@index')
    ->where('category', '[a-z-]+')
    ->name('category');

Route::get('{category}/{product}', 'ProductController@show')
    ->where(['category' => '[a-z-]+', 'product' => '[a-z0-9-]+'])
    ->name('product');
