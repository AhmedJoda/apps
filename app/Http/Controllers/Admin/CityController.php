<?php

namespace App\Http\Controllers\Admin;

use App\Traits\JodaResources;
use App\Http\Controllers\Controller;
use App\Models\City;

class CityController extends Controller
{
    use JodaResources;

    protected $model = City::class;
    protected $view = 'admin.city';
    protected $route = 'admin.cities';
}
