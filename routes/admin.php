<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('settings', 'SettingController@index');
Route::get('social-settings', 'SettingController@socialSettings');
Route::get('front-settings', 'SettingController@frontSettings');
Route::post('settings', 'SettingController@store');

Route::get('about-us', 'SettingController@aboutUs');
Route::get('conditions', 'SettingController@Conditions');

Route::resource('users', 'UserController');
Route::resource('admins', 'AdminController');
Route::get('admins/{id}/permissions','AdminController@permissions')->name('admins.permissions');
Route::get('admins/{id}/permissions/{code}','AdminController@togglePermissions')->name('admins.permissions.toggle');
Route::resource('categories', 'CategoryController');

Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@store');
