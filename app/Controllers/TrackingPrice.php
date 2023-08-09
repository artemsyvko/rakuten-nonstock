<?php

namespace App\Controllers;

class TrackingPrice extends BaseController
{
    public function index()
    {
        $header_params = [
            'page_title' => 'デフォルト追跡価格設定',
        ];
        return view('sections/header', $header_params)
            .view('tracking_price_setting_page')
            .view('sections/footer');
    }
}
