<?php

namespace App\Controllers;

class Blacklist extends BaseController
{
    public function index()
    {
        $header_params = [
            'page_title' => 'ブラックリスト',
        ];
        return view('sections/header', $header_params)
            .view('blacklist_page')
            .view('sections/footer');
    }
}
