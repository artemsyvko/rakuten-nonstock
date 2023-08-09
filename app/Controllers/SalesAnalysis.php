<?php

namespace App\Controllers;

class SalesAnalysis extends BaseController
{
    public function index()
    {
        $header_params = [
            'page_title' => '売上分析',
        ];
        return view('sections/header', $header_params)
            .view('sales_analysis_page')
            .view('sections/footer');
    }
}
