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

    public function import_error()
    {
        $header_params = [
            'page_title' => '取込エラー詳細',
        ];
        return view('sections/header', $header_params)
            .view('import_error_page')
            .view('sections/footer');
    }
}
