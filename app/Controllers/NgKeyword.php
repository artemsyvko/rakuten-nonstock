<?php

namespace App\Controllers;

class NgKeyword extends BaseController
{
    public function index()
    {
        $header_params = [
            'page_title' => '禁止キーワード',
        ];
        return view('sections/header', $header_params)
            .view('ngkeyword_page')
            .view('sections/footer');
    }
}
