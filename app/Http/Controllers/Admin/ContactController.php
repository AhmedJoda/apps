<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Traits\JodaResources;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    use JodaResources;
    protected $model = Contact::class;
    protected $view = 'admin.contacts';
    protected $route = 'admin.contacts';
}
