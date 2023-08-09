<?php

namespace App\Controllers;

class ItemListing extends BaseController
{
    public function index()
    {
        $header_params = [
            'page_title' => '商品一括出品',
        ];
        return view('sections/header', $header_params)
            .view('item_listing_page')
            .view('sections/footer');
    }

    public function listing_error()
    {
        $header_params = [
            'page_title' => '出品不可詳細',
        ];
        return view('sections/header', $header_params)
            .view('listing_error_page')
            .view('sections/footer');
    }
}
