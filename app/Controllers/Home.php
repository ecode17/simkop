<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index', [
            'title' => 'Beranda',
            'activeMenu' => 'home'
        ]);
    }

    public function paket()
    {
        return view('paket', [
            'title' => 'Paket',
            'activeMenu' => 'paket'
        ]);
    }
}
