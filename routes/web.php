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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('products', 'ProductController@index');
Route::get('products/create', 'ProductController@create');
Route::get('products/edit/{id}', 'ProductController@edit');//لازم يرسل id
Route::get('products/delete/{id}', 'ProductController@destroy');
Route::get('products/update/{id}', 'ProductController@update');//عادي يرسل ولا ما يرسل id
Route::get('products/store', 'ProductController@store');





