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

Route::get('/', 'EventController@index');
Route::get('/events/{event}', 'EventController@show');
Route::get('/event/create', 'EventController@create');
Route::post('/event/store', 'EventController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
