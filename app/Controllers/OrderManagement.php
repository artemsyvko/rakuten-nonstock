<?php

namespace App\Controllers;

class OrderManagement extends BaseController
{
    public function index()
    {
        $header_params = [
            'page_title' => '注文管理',
        ];
        return view('sections/header', $header_params)
            .view('order_management_page')
            .view('sections/footer');
    }

    public function edit()
    {
        $header_params = [
            'page_title' => '注文情報編集',
        ];
        return view('sections/header', $header_params)
            .view('order_edit_page')
            .view('sections/footer');
    }
}
