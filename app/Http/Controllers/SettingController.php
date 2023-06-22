<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function profile()
    {
        return view('providers.settings.profile');
    }
    public function mfa()
    {
        return view('providers.settings.mfa');
    }
    public function favorites()
    {
        return view('providers.settings.favorites');
    }
    public function payment()
    {
        return view('providers.settings.payment');
    }
    public function password()
    {
        return view('providers.settings.password');
    }
}
