<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerone extends Controller
{
    public function login()
    {
        return view('Ecom.View.signin');
    }
}
