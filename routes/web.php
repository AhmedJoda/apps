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

require __DIR__.'/auth.php';



Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cache,config,route and view where cleared successfully";
});

Route::get('admin/login', 'Admin\AuthController@login');
Route::post('admin/login', 'Admin\AuthController@attempt')->name('admin.login.attempt');
Route::get('admin/register', 'Admin\AuthController@register');
