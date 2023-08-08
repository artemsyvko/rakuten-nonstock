<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $header_params = [
            'page_title' => '登録商品一覧',
        ];
        return view('sections/header', $header_params)
            .view('home_page')
            .view('sections/footer');
    }
}
