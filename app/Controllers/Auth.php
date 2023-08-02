<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function register()
    {
        return view('auth/register_page');
    }

    public function login()
    {
        return view('auth/login_page');
    }
}
