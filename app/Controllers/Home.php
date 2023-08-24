<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "Home";
        return view('Templates/Header', $data)
            . view('Pages/Home')
            . view('Templates/Footer');
    }
}
