<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControler extends Controller
{
    //
    public function index()
    {
      return view('admin_login');
    }
}
