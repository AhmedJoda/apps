<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('settings', 'SettingController@index');
Route::get('social-settings', 'SettingController@socialSettings');
Route::get('front-settings', 'SettingController@frontSettings');
Route::post('settings', 'SettingController@store');

Route::resource('users', 'UserController');
Route::resource('admins', 'AdminController');

Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@store');
