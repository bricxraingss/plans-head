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

Route::prefix('/')->group(function(){
  Route::get('create', 'User\UsersController@create')->name('user.create');
  Route::post('store', 'User\UsersController@store')->name('user.store');
  Route::get('login', 'User\UsersController@login')->middleware('guest')->name('user.login');
  Route::post('verify', 'User\UsersController@verify')->name('user.auth');
  Route::get('logout', 'User\UsersController@logout')->name('user.logout');
  
  Route::middleware('admin')->prefix('admin')->group(function(){
    Route::get('dashboard', 'Admin\AdminsController@index')->name('admin.dashboard');
  });
  
  Route::middleware('user')->group(function(){
    Route::get('dashboard', 'User\UsersController@index')->name('user.dashboard');
  });
});