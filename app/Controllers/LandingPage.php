<?php

namespace App\Controllers;

class LandingPage extends BaseController
{
    public function index()
    {
        return view('landing_page');
    }
}
