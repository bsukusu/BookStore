<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudOperator extends Controller
{

  public function create()
  {
    return view('Insert');
  }
}
