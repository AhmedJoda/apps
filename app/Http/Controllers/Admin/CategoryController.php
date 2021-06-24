<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\JodaResources;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use JodaResources;
    protected $model = Category::class;
    protected $view = 'admin.categories';
    protected $route = 'admin.categories';
}
