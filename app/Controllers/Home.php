<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'content' => 'Selamat datang di website kami!',
        ];

        return view('home', $data);
    }
}
