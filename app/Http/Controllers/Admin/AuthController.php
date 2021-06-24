<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function attempt(Request $request){
        if (auth()->attempt($request->only('email','password'))){
            if (isAdmin())
                return redirect()->intended('admin');
        }
        return back()->withErrors(['auth'=>"بيانات خاطئة"]);
    }
}
;
