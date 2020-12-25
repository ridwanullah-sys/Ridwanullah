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

Route::resource('post', 'App\Http\Controllers\postscontroller');



Route::get('/', 'App\Http\Controllers\postscontroller@index');
Route::get('/services', 'App\Http\Controllers\Ridiscontroller@services');
Route::get('/about', 'App\Http\Controllers\Ridiscontroller@about');


Auth::routes();

Route::get('/dashboard', 'App\Http\Controllers\dashboardController@index');
