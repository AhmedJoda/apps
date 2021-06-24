<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.setting.index');
    }
    public function socialSettings()
    {
        return view('admin.setting.social');
    }
    public function frontSettings()
    {
        return view('admin.setting.front');
    }
    public function aboutUs()
    {
        return view('admin.setting.about-us');
    }
    public function Conditions()
    {
        return view('admin.setting.conditions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        if ($request->logo) {
            $fileName = 'logo'.'.'.$request->logo->extension();

            upload($fileName, $request->logo);
            
            $data['logo'] =  $fileName;
        }
        setting($data)->save();
        return back();
    }
}
