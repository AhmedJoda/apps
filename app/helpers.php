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
