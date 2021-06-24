<?php

namespace App\Http\Controllers\Admin;

use App\Traits\JodaResources;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use JodaResources;

    protected $model = User::class;
    protected $view = 'admin.user';
    protected $route = 'admin.users';

    public function query($query)
    {
        return $query->where('is_admin', 0);
    }
    
    // bad
    // public function store()
    // {
    //     $this->validate(request(),[
    //         'name'  =>  'required',
    //         'email'  =>  'required|email',
    //         'password'  =>  'required',
    //     ]);
    //     $data = request()->all();
    //     $data['password'] = Hash::make($data['password']);
    //     User::query()->create($data);
    //     return redirect('admin/users');
    // }

    // good
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
            'password' => Hash::make(request()->password)
        ]);
    }
}
