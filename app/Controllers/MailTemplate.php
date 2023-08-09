<?php

namespace App\Controllers;

class MailTemplate extends BaseController
{
    public function index()
    {
        $header_params = [
            'page_title' => 'メールテンプレート編集',
        ];
        return view('sections/header', $header_params)
            .view('mail_template_page')
            .view('sections/footer');
    }
}
