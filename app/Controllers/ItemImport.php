<?php

namespace App\Controllers;

class ItemImport extends BaseController
{
    public function index()
    {
        return view('sections/header')
            .view('item_import_page')
            .view('sections/footer');
    }
}
