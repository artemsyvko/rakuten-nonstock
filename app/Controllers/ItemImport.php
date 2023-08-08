<?php

namespace App\Controllers;

class ItemImport extends BaseController
{
    public function index()
    {
        $header_params = [
            'page_title' => '商品インポート',
        ];
        return view('sections/header', $header_params)
            .view('item_import_page')
            .view('sections/footer');
    }
}
