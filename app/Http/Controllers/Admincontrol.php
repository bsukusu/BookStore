<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontrol extends Controller
{
    public function admin()
    {
        return view('adminpanel');
    }

    public function logout()
    {
        return view('logout');
    }
}
