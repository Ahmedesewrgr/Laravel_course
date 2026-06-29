<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create_1()
    {
        return view('auth.login');
    }
}
