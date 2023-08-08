<?php

namespace App\Controllers;

class ItemManagement extends BaseController
{
    public function index()
    {
        $header_params = [
            'page_title' => '登録商品一覧',
        ];
        return view('sections/header', $header_params)
            .view('item_management_page')
            .view('sections/footer');
    }
}
