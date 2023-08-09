<?php

namespace App\Controllers;

class RMSItemDelete extends BaseController
{
    public function index()
    {
        $header_params = [
            'page_title' => 'RMSに出品されている商品の一括削除',
        ];
        return view('sections/header', $header_params)
            .view('rms_item_delete_page')
            .view('sections/footer');
    }
}
