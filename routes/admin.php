<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('settings', 'SettingController@index');
Route::get('social-settings', 'SettingController@socialSettings');
Route::get('front-settings', 'SettingController@frontSettings');
Route::post('settings', 'SettingController@store');

Route::get('about-us', 'SettingController@aboutUs');
Route::get('conditions', 'SettingController@Conditions');


Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@store');


Route::resource('users', 'UserController');
Route::resource('admins', 'AdminController');
Route::resource('posts', 'PostController');
Route::resource('cities', 'CityController');
