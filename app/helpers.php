<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('user_email')) {
    function isAdmin()
    {
        return auth()->user()->is_admin ?? 0;
    }
}

if (!function_exists('user')) {
    function user()
    {
        return auth()->user();
    }
}


if (!function_exists('upload')) {
    function upload($fileName, $file)
    {
        return Storage::disk('local')->put($fileName, file_get_contents($file));
    }
}

if (!function_exists('getUrl')) {
    function getUrl($path)
    {
        return url("storage/app/$path") ;
    }
}
if (!function_exists('mainCategoriesForSelect')) {
    function mainCategoriesForSelect()
    {
        return \App\Models\Category::query()->whereNull('category_id')->get()->add(['id'=>null,'name'=>'بدون'])->pluck('name','id')->reverse()->toArray() ;
    }
}
if (!function_exists('isSuperAdmin')) {
    function isSuperAdmin()
    {
        return auth()->check() and auth()->user()->super_admin;
    }
}
if (!function_exists('authedAdmin')) {
    function authedAdmin()
    {
        return \App\Models\Admin::query()->find(auth()->id());
    }
}
if (!function_exists('can')) {
    function can($code,$admin = null)
    {
        return \App\Models\AdminPermission::can($code,$admin);
    }
}

if (!function_exists('permissionsList')) {
    function permissionsList()
    {
        return
            [
                'admins'        =>  ['create','edit','delete','view','edit_permissions'],
                'categories'    =>  ['create','edit','delete','view'],
                'users'         =>  ['create','edit','delete','view'],
                'cities'        =>  ['create','edit','delete','view'],
                'posts'         =>  ['delete','view','close'],
                'reports'       =>  ['delete','view','close'],
                'comments'      =>  ['delete','view'],
                'settings'      =>  ['edit','view'],
            ] ;
    }
}

