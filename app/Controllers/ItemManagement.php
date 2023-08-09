<?php

namespace App\Controllers;

class ItemManagement extends BaseController
{
    public function index()
    {
        $header_params = [
            'page_title' => '商品管理',
        ];
        return view('sections/header', $header_params)
            .view('item_management_page')
            .view('sections/footer');
    }

    public function edit()
    {
        $header_params = [
            'page_title' => '商品情報編集',
        ];
        return view('sections/header', $header_params)
            .view('item_edit_page')
            .view('sections/footer');
    }
}
