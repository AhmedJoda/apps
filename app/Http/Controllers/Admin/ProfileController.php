<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;

class ProfileController extends Controller
{
    protected $rules =  [
            'newPassword' => 'required|min:6',
    
    ];
    protected $trans =  [
            'newPassword' => 'كلمة السر الجديدة',
    
    ];
    
    public function index()
    {
        return view('admin.profile.index');
    }
    
    public function store(Request $r)
    {
        $data = $r->except('_token');
        $this->validate($r, $this->rules, $this->trans);
        if (Hash::check($r->input('oldPassword'), User::find(auth()->user()->id)->password)) {
            $data['password'] = Hash::make($r->newPassword);
            auth()->user()->update($data);
            session()->flash('success', 'تم  بنجاح');
        } else {
            session()->flash('error', trans('كلمة المرور القديمة غير صحيحة'));
        }
        return back();
    }
}
