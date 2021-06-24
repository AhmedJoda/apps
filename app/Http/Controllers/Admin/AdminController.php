<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\AdminPermission;
use App\Traits\JodaResources;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    use JodaResources;

    protected $model = User::class;
    protected $view = 'admin.admin';
    protected $route = 'admin.admins';

    public function query($query)
    {
        return $query->where('is_admin', 1);
    }

    public function beforeStore()
    {
        $this->mergePassword();
    }

    public function beforeUpdate()
    {
        $this->mergePassword();
    }

    public function mergePassword()
    {
        request()->merge([
            'password' => Hash::make(request()->password),
            'is_admin' => 1
        ]);
    }
    public function permissions($id)
    {
        $admin  = Admin::query()->find($id);
        return view('admin.admin.permissions', compact('admin'));
    }
    public function togglePermissions($id, $code)
    {
        $admin  = Admin::query()->find($id);
        AdminPermission::toggle($code, $admin);
        return back();
    }
}
