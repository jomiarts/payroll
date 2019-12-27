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

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Admin\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', ['as'=>'admin-login','uses'=>'Admin\Auth\AdminLoginController@login'])->name('admin.login.submit');
    Route::get('/dashboard', '\App\Http\Controllers\Admin\DashboardController@versionone')->name('admin.dashboard');
    Route::resource('/dashboard/clients', '\App\Http\Controllers\Admin\ClientsController');


    
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');