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
}
