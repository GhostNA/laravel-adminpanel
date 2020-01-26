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

use Illuminate\Support\Facades\Auth;

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Middleware auth
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index');
    // Profile
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
    Route::put('/profile/update', 'ProfileController@update')->name('profile.update');
    Route::put('/profile/password', 'ProfileController@password')->name('profile.password');

    // Users
    Route::get('/user', 'UserController@index')->name('user.index');
    Route::get('/user/create', 'UserController@create')->name('user.create');
    Route::get('/user/edit/{user}', 'UserController@edit')->name('user.edit');
    Route::post('/user/create', 'UserController@store')->name('user.store');
    Route::put('/user/update/{user}', 'UserController@update')->name('user.update');
    Route::delete('/user/destroy/{user}', 'UserController@destroy')->name('user.destroy');

    // Role
    Route::get('role', 'RoleController@index')->name('role.index');
    Route::get('role/create', 'RoleController@create')->name('role.create');
    Route::get('role/edit/{role}', 'RoleController@edit')->name('role.edit');
    Route::post('role/create', 'RoleController@store')->name('role.store');
    Route::put('role/update', 'RoleController@update')->name('role.update');
    Route::delete('role/destroy/{role}', 'RoleController@destroy')->name('role.destroy');

    Route::get('service', 'ServiceController@index')->name('services.index');

    Route::get('/search', 'SearchController@search');
});



