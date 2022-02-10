<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontrol extends Controller
{
    function admin()
    {
      return view('adminpanel');
    }
}
