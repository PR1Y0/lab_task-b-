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

Route::get('/login', 'App\Http\Controllers\LoginController@M1F1');
Route::post('/login', 'App\Http\Controllers\LoginController@M1F2');

Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/logout', 'App\Http\Controllers\LogoutController@M2F1');

Route::get('/register', 'App\Http\Controllers\RegistrationController@M3F1');
Route::post('/register', 'App\Http\Controllers\RegistrationController@M3F2');