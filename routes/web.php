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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('admin-login', 'Admin\Auth\AdminLoginController@showLoginForm');

Route::post('admin-login', ['as'=>'admin-login','uses'=>'Admin\Auth\AdminLoginController@login']);



Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/dashboard', '\App\Http\Controllers\Admin\DashboardController@versionone')->name('dashboard');

Route::resource('/dashboard/clients', '\App\Http\Controllers\Admin\ClientsController');