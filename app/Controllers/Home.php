<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('sections/header')
            .view('home_page')
            .view('sections/footer');
    }
}
