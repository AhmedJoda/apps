<?php

namespace App\Http\Controllers\Admin;

use App\Traits\JodaResources;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    use JodaResources;

    protected $model = Post::class;
    protected $view = 'admin.post';
    protected $route = 'admin.posts';
    protected $files = ['main_photo'];
}
