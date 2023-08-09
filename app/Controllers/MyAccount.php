<?php

namespace App\Controllers;

class MyAccount extends BaseController
{
    public function index()
    {
        $header_params = [
            'page_title' => 'ユーザー情報編集',
        ];
        return view('sections/header', $header_params)
            .view('my_account_page')
            .view('sections/footer');
    }
}
